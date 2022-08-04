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
        
        if ($_SESSION['level'] != "murid" ) {
            // echo "ancokk";
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data['judul'] = 'Home Siswa';
        
        $this->view('templates/headersiswa', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    // public function siswa()
    // {
    //     var_dump('test');
    //     die;
    // }

    public function mapelSiswa()
    {   
        $data['judul'] = 'Home Siswa';
        
        $this->view('templates/headersiswa', $data);
        $this->view('siswa/mapel', $data);
        $this->view('templates/footer');
    }

    public function kontak()
    {
        $data['judul'] = 'Kontak kami';

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/kontak', $data);
        $this->view('templates/footer');
    }
    
    public function soalFisika()
    {
        $data['judul'] = 'Fisika';

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/soal', $data);
        $this->view('templates/footer');
    }

    public function praSoal()
    {
        $data['judul'] = 'Pra Ujian';

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/praSoal', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            header('Location: ' . BASE . '/Siswa');
            exit;
        }
    }

}