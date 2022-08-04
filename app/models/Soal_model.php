<?php

class Soal_model extends Controller
{

public function tambahDataSoal($data)
    {
        $query = "INSERT INTO ujian VALUES
                    ('', :nama, :materi)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('materi', $data['materi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}