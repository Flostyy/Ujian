<?php

class Guru extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // var_dump($_SESSION['id']);
        $id_guru = $_SESSION['id'];
        $data['judul'] = 'Mapel Guru';
        $data['mapel'] = $this->model('Soal_model')->getAllMapel($id_guru);
        $data['mapel'] = array_map(function ($mapel) {
            $mapel['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($mapel['id'])[0]['jumlahSoal'];
            return $mapel;
        }, $data['mapel']);

        $data['judulMapel'] = $this->model('Siswa_model')->getGuruById($id_guru)[0];
        // var_dump($data['judulMapel']);

        $data['judul'] = 'Home Guru';

        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();

        $this->view('templates/header', $data);
        $this->view('guru/register', $data);
        $this->view('templates/footer');
    }

    public function mapelGuru()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $id_guru = $_SESSION['id'];
        $data['judul'] = 'Mapel Guru';
        $data['mapel'] = $this->model('Soal_model')->getAllMapel($id_guru);
        // var_dump($data['mapel']);
        // die;
        $data['mapel'] = array_map(function ($mapel) {
            $mapel['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($mapel['id'])[0]['jumlahSoal'];
            return $mapel;
        }, $data['mapel']);

        $this->view('templates/header', $data);
        $this->view('guru/mapel', $data);
        $this->view('templates/footer');
    }

    public function tambahSoal()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data['judul'] = 'Tambah Soal';

        $this->view('templates/header', $data);
        $this->view('guru/tambah', $data);
        $this->view('templates/footer');

        // if ($this->model('Soal_model')->tambahDataSoal($_POST) > 0) {
        //     header('Location: ' . BASE . '/Guru/mapelGuru');
        //     exit;
        // }
    }

    public function tambahSoalNew()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // $id = $_SESSION['id'];
        $data = $_POST;


        // $data['id'] = $id;
        $this->model('Soal_model')->tambahDataSoal($data);
        // die;
        header("Location: " . BASE . "/Guru/mapelGuru");
    }

    public function detailMapel($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // try {
        //     if ($this->model('Soal_model')->getMapelForGuru($id) > 0) {
        //         header('Location: ' . BASE . '/Guru/detailMapel/' . $id);
        //         exit;
        //     }
        // } catch (\Throwable) {
        //     header('Location: ' . BASE . '/Guru/detailMapel');
        // }

        // session_start();
        $data['detail'] = $this->model('Soal_model')->getMapelForGuru($id);
        $data['detail'] = array_map(function ($detail) {
            $detail['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($detail['id'])[0]['jumlahSoal'];
            return $detail;
        }, $data['detail']);


        $data['judul'] = 'Detail Mapel';

        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }

    public function tambahTambah($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data = $_POST;
        $data['id'] = $id;
        $this->model('Soal_model')->tambahBaris($data);

        header("Location: " . BASE . "/Guru/detailMapel/" . $id);
    }

    public function pengaturan()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // var_dump($_SESSION['id']);
        $id = $_SESSION['id'];
        $data['judul'] = 'pengaturan';

        $data['id'] = $this->model('Siswa_model')->getGuruById($id);
        // var_dump($data['id']);
        // die;

        $this->view('templates/header', $data);
        $this->view('guru/setting', $data);
        $this->view('templates/footer');
    }

    public function tambahSiswa()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        try {
            if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
                header('Location: ' . BASE . '/Guru/register?berhasil=data berhasil');
                exit;
            }
        } catch (\Throwable $th) {
            header('Location: ' . BASE . '/Guru/register?pesan=email sudah terpakai');
        }
    }


    public function ubahData()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    public function ubahSoal()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // var_dump($id);
        // var_dump($_POST['id']);
        // die;
        echo json_encode($this->model('Soal_model')->getSoalById($_POST['id']));
    }

    public function ubah()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }
        // var_dump($_POST);
        // die;
        // $this->model('Siswa_model')->ubahDataGuru($_POST);
        // header('Location: ' . BASE . '/Guru/register');

        if ($this->model('Siswa_model')->ubahDataGuru($_POST) > 0) {
            header('Location: ' . BASE . '/Guru/register?pesanUbah= Data berhasil diubah');
            exit;
        } else {
            header('Location: ' . BASE . '/Guru/register?pesan!Ubah=Data tidak ada perubahan');
            exit;
        }
    }

    public function soalUbah($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data = $_POST;
        // var_dump($data);
        // die;
        $this->model('Soal_model')->ubahSoalGuru($data);
        header('Location: ' . BASE . '/Guru/detailMapel/' . $id);
    }

    public function ubahUjian()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data = $_POST;
        // var_dump($data);
        // die;
        $this->model('Soal_model')->ubahUjianGuru($data);
        header('Location: ' . BASE . '/Guru/detailMapel/' . $data['id']);

        if ($this->model('Soal_model')->ubahUjianGuru($data) > 0) {
            header('Location: ' . BASE . '/Guru/detailMapel/' . $data['id'] . '');
            exit;
        } else {
            header('Location: ' . BASE . '/Guru/detailMapel/' . $data['id'] . '');
            exit;
        }
    }

    public function hapusSiswa($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data['judul'] = 'Hapus Guru';

        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            header('Location: ' . BASE . '/Guru/register');
            exit;
        }
    }

    public function hapusSoal($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        $data['judul'] = 'Hapus Soal';

        if ($this->model('Soal_model')->hapusDataSoal($id) > 0) {
            header('Location: ' . BASE . '/Guru/mapelGuru');
            exit;
        }
    }

    public function hapusSoalUjian($id_soal, $id_ujian)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "guru") {
            header('Location: ' . 'http://localhost/Ujian/public/Siswa');
            die();
        }

        // var_dump($id_soal,$id_ujian);
        // die;
        

        if ($this->model('Soal_model')->hapusSoal($id_soal) > 0) {
            header('Location: ' . BASE . '/Guru/detailMapel/' . $id_ujian);
            exit;
        }
    }
}
