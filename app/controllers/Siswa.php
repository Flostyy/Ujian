<?php

class Siswa extends Controller
{
    public function indexSiswa()
    {   
        if(session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'Login/loginSiswa');
            ob_end_flush();
            die();
        }

        $data['judul'] = 'Home Siswa';
        
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function mapel()
    {   
        $data['judul'] = 'Home';
        
        $this->view('templates/header', $data);
        $this->view('siswa/mapel', $data);
        $this->view('templates/footer');
    }
}