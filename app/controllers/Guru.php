<?php

class Guru extends Controller
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

        $data['judul'] = 'Home Guru';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        // $data['siswa'] = $this->model('Siswa_model')->getUbah();
        
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

    public function tambahSoal()
    {   
        $data['judul'] = 'Tambah Soal';
        
        $this->view('templates/header', $data);
        $this->view('guru/tambah', $data);
        $this->view('templates/footer');
    }


    public function pengaturan()
    {   
        $data['judul'] = 'pengaturan';
        
        $this->view('templates/header', $data);
        $this->view('guru/setting', $data);
        $this->view('templates/footer');
    }
    public function tambahSiswa()
    {
        $data ['judul'] = 'Tambah Guru';

        if($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            header('Location: ' . BASE);
            exit;
        }
    }

    public function ubahData()
    {
        $this->model('Siswa_model')->getSiswaById($_POST['id']);
    }

    public function hapusSiswa($id)
    {
        $data ['judul'] = 'Hapus Guru';

        if($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            header('Location: ' . BASE);
            exit;
        }

    }
}