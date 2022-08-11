<?php

class Siswa_model extends Controller
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE `level` = "murid" ');
        return $this->db->resultSet();
    }

    public function getAllMurid()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE `level` = "guru" ');
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM users' . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getMapelById($id)
    {
        $this->db->query('SELECT ujian.id, users.mapel, ujian.judul, ujian.deskripsi FROM users INNER JOIN ujian ON users.id = ujian.id_guru WHERE ujian.id_guru = :id');
        $this->db->bind('id',$id);
        return $this->db->single();
    } 
    
    public function getGuruById($id)
    {
        $this->db->query('SELECT * FROM users WHERE `id` = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    } 

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO users VALUES
                    ('', :nama, :email, :password, :level, :mapel)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('mapel', $data['mapel']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGuru($data)
    {
        // var_dump($data['mapel'],$data['email']);
        // die;
        $query = "UPDATE `users` SET 
        `nama`=:nama,
        `email`=:email,
        `password`=:password,
        `level`=:level,
        `mapel`=:mapel 
        WHERE `id`=:id";
        // UPDATE users SET
        // nama = :nama, 
        // email = :email, 
        // password = :password,
        // level = :level,
        // mapel = :mapel
        // WHERE id = :id";


        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
}