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

    public function tambahDataSoal($data)
    {
        $query = "INSERT INTO ujian VALUES
                    ('', :judul, :deskripsi)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}