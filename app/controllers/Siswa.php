<?php

class Siswa extends Controller
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

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }

        $data['id'] = $this->model('Siswa_model')->getAllMurid();
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
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }


        $data['judul'] = 'Mapel Siswa';

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/mapel', $data);
        $this->view('templates/footer');
    }

    public function kontak()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }

        $data['judul'] = 'Kontak kami';

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/kontak', $data);
        $this->view('templates/footer');
    }

    public function soal($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }

        // $jmlSoal = $jmlSoal;
        // if (result)
        $data['judul'] = 'Soal';
        $data['id'] = $this->model('Soal_model')->getMapelForGuru($id);
        // $data['id']['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($data['id'])[0]['jumlahSoal'];

        // var_dump($data['id']);
        // die;
        // var_dump($data['id']);

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/soal', $data);
        $this->view('templates/footer');
    }

    public function nilai()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }

        $data = $_POST;
        $id_user = $_SESSION['id'];

        $ujians = $this->model('Soal_model')->getMapelForGuru($data['ujian']);
        $jawaban = [];
        $total_jawaban_benar = 0;
        foreach ($ujians as $key => $ujian) {
            $benar = $data['jawaban' . $ujian['id_soal']] == $ujian['kunci'];
            $jawaban[$ujian['id_soal']] = [
                'jawaban' => $data['jawaban' . $ujian['id_soal']],
                'benar' => $benar
                // 'id_ujian' => $ujian['id_ujian']
            ];
            if ($benar) {
                $total_jawaban_benar += 1;
            }
        }

        $nilai = round(($total_jawaban_benar / count($jawaban)) * 100);

        // var_dump($nilai, $total_jawaban_benar, count($jawaban));
        // die;


        json_encode($jawaban);
        $this->model('Soal_model')->tambahNilai($jawaban, $data, $id_user, $nilai);
        // json_encode($this->model('Soal_model')->tambahNilai($jawaban, $data['ujian'], $id_user));

        header('Location: ' . 'http://localhost/Ujian/Public/Siswa/praSoal/' . $data['id_guru']);
    }

    public function praSoal($id)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }
        $data['judul'] = 'Pra Ujian';
        $data['ujian'] = $this->model('Siswa_model')->getMapelById($id);
        $data['ujian']['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($data['ujian']['id'])[0]['jumlahSoal'];
        // var_dump($data['ujian']['id']);
        // die;
        
        $id_ujian = $data['ujian']['id'];
        $id_user = $_SESSION['id'];

        $data['nilai'] = $this->model('Soal_model')->ambilNilai($id_user, $id_ujian);
        // var_dump($data['nilai'][0]['nilai']);
        // die;
        // $data['mapel'] = $this->model('Soal_model')->getAllMapel($id_guru);
        // $data['mapel'] = array_map(function ($mapel) {
        //     $mapel['jumlahSoal'] = $this->model('Soal_model')->jmlSoal($mapel['id'])[0]['jumlahSoal'];
        //     return $mapel;
        // }, $data['mapel']);

        $this->view('templates/headersiswa', $data);
        $this->view('siswa/praSoal', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'http://localhost/Ujian/public/Login');
            ob_end_flush();
            die();
        }

        if ($_SESSION['level'] != "murid") {
            header('Location: ' . 'http://localhost/Ujian/public/Guru');
            die();
        }

        if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            header('Location: ' . BASE . '/Siswa');
            exit;
        }
    }
}
