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

        if ($_SESSION['level'] != "guru" ) {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // var_dump($_SESSION['id']);

        $data['judul'] = 'Home Guru';
        
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function register()
    {   
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        
        $this->view('templates/header', $data);
        $this->view('guru/register', $data);
        $this->view('templates/footer');
    }

    public function mapelGuru()
    {   
        $data['judul'] = 'Mapel Guru';
        $data['mapel'] = $this->model('Soal_model')->getAllMapel();
        
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

        if($this->model('Soal_model')->tambahDataSoal($_POST) > 0) {
            header('Location: ' . BASE .'/Guru/mapelGuru');
            exit;
        }
    }

    public function detailMapel()
    {   
        $data['judul'] = 'Detail Mata Pelajaran';
        
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
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
            header('Location: ' . BASE .'/Guru/register');
            exit;
        }
    }

        public function ubahData()
        {
           echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
        } 

        public function ubah()
        {
            if($this->model('Siswa_model')->ubahDataGuru($_POST) > 0 ) {
                header('Location: ' . BASE . '/Guru');
                exit;
            }else{
                header('Location: ' . BASE . '/Guru');
                exit;
            }
        }

    public function hapusSiswa($id)
    {
        $data ['judul'] = 'Hapus Guru';

        if($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            header('Location: ' . BASE .'/Guru/register');
            exit;
        }

    }

    public function hapusSoal($id)
    {
        $data ['judul'] = 'Hapus Soal';

        if($this->model('Soal_model')->hapusDataSiswa($id) > 0) {
            header('Location: ' . BASE .'/Guru/mapelGuru');
            exit;
        }

    }
}