<?php

class Siswa extends Controller
{
    public function index()
    {   
        if(session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        $data['judul'] = 'Home Siswa';
        
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function mapelSiswa()
    {   
        $data['judul'] = 'Home Siswa';
        
        $this->view('templates/header', $data);
        $this->view('siswa/mapel', $data);
        $this->view('templates/footer');
    }

    public function kontak()
    {
        $data['judul'] = 'Kontak kami';

        $this->view('templates/header', $data);
        $this->view('siswa/kontak', $data);
        $this->view('templates/footer');
    }
    
    public function soalFisika()
    {
        $data['judul'] = 'Fisika';

        $this->view('templates/header', $data);
        $this->view('siswa/soal', $data);
        $this->view('templates/footer');
    }

    
}