<?php

class Guru extends Controller
{
    public function indexGuru()
    {   
        if(session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        $data['judul'] = 'Home Guru';
        
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function mapelGuru()
    {   
        $data['judul'] = 'Home Guru';
        
        $this->view('templates/header', $data);
        $this->view('guru/mapel', $data);
        $this->view('templates/footer');
    }
}