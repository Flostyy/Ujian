<?php

class Soal_model extends Controller
{
    private $table = 'ujian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMapel($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_guru = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function jmlSoal($id)
    {
        $this->db->query('SELECT count(id) AS jumlahSoal FROM soal WHERE id_ujian = :id');
        $this->db->bind('id', $id);

        return $this->db->resultSet();
    }

    // public function tambahDataSoal($data)
    // {
    //     $query = "INSERT INTO ujian VALUES
    //                 ('', :judul, :deskripsi)";

    //     $this->db->query($query);
    //     $this->db->bind('judul', $data['judul']);
    //     $this->db->bind('deskripsi', $data['deskripsi']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
    public function hapusDataSoal($id)
    {
        $query = "DELETE FROM ujian WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getMapelById($id)
    {
        $this->db->query('SELECT ujian.id, ujian.judul, ujian.deskripsi, soal.id as id_soal, soal.soal, soal.option_a, soal.option_b, soal.option_c, soal.option_d, soal.option_e FROM ujian INNER JOIN soal ON ujian.id = soal.id_ujian WHERE soal.id_ujian = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getMapelForGuru($id)
    {
        $this->db->query('SELECT ujian.id, ujian.judul, ujian.deskripsi, soal.id as id_soal, soal.soal, soal.option_a, soal.option_b, soal.option_c, soal.option_d, soal.option_e FROM ujian INNER JOIN soal ON ujian.id = soal.id_ujian WHERE soal.id_ujian = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBaris($id)
    {
        $query = "INSERT INTO soal VALUES
                    ('', :soal, :option_a, :option_b, :option_c, :option_d, :option_e, :kunci, :id_ujian)";

        $this->db->query($query);
        $this->db->bind('soal', $id['soal']);
        $this->db->bind('option_a', $id['option_a']);
        $this->db->bind('option_b', $id['option_b']);
        $this->db->bind('option_c', $id['option_c']);
        $this->db->bind('option_d', $id['option_d']);
        $this->db->bind('option_e', $id['option_e']);
        $this->db->bind('kunci', $id['jawaban']);
        $this->db->bind('id_ujian', $id['id']);

        $this->db->execute();
    }

    public function tambahDataSoal($data)
    {

        // var_dump($data['judul'],$data['deskripsi'],$data['id']);
        // var_dump($data);
        // die;
        $query = "INSERT INTO ujian VALUES
        ('', :judul, :deskripsi, :id_guru)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id_guru', $data['id']);

        $this->db->execute();
        
        $this->db->query('SELECT * FROM ujian ORDER BY ID DESC LIMIT 1');
        $this->db->execute();

        $ujian = $this->db->resultSet()[0];

        for ($i = 1; $i <= 5; $i++) {
            // var_dump($data['soal' . $i], $i);
            $query = "INSERT INTO soal VALUES
                    ('', :soal, :option_a, :option_b, :option_c, :option_d, :option_e, :kunci, :id_ujian)";

            $this->db->query($query);
            $this->db->bind('soal', $data['soal' . $i]);
            $this->db->bind('option_a', $data['option_a' . $i]);
            $this->db->bind('option_b', $data['option_b' . $i]);
            $this->db->bind('option_c', $data['option_c' . $i]);
            $this->db->bind('option_d', $data['option_d' . $i]);
            $this->db->bind('option_e', $data['option_e' . $i]);
            $this->db->bind('kunci', $data['jawaban' . $i]);
            $this->db->bind('id_ujian', $ujian['id']);

            $this->db->execute();
        }
    }

    public function getSoalById($id)
    {
        $this->db->query('SELECT * FROM soal' . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function ubahSoalGuru($id)
    {
        $query = "UPDATE soal SET
                soal = :soal,
                option_a = :option_a,
                option_b = :option_b,
                option_c = :option_c,
                option_d = :option_d,
                option_e = :option_e,
                kunci = :kunci
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('soal', $id['soal']);
        $this->db->bind('option_a', $id['option_a']);
        $this->db->bind('option_b', $id['option_b']);
        $this->db->bind('option_c', $id['option_c']);
        $this->db->bind('option_d', $id['option_d']);
        $this->db->bind('option_e', $id['option_e']);
        $this->db->bind('kunci', $id['jawaban']);
        $this->db->bind('id', $id.['id']);

        $this->db->execute();
    }

    public function ubahUjianGuru($data)
    {

        // var_dump($data);
        // die;
        $query = "UPDATE ujian SET 
                judul = :judul,
                deskripsi = :deskripsi
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
    }
}
