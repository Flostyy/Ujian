<?php

class Soal_model extends Controller
{
    private $table = 'ujian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMapel()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
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

    public function tambahDataSoal($data)
    {   
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

        for ($i=1; $i < 5; $i++) {
            var_dump($data['soal' . $i], $i);
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
}