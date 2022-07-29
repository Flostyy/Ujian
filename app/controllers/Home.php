<?php

class Home extends Controller
{
    public function index()
    {   
        if(session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['nama'])) {
            ob_start();
            header('Location: ' . 'login');
            ob_end_flush();
            die();
        }

        $data['judul'] = 'Home';
        
        $this->view('templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('templates/footer');
    }

    public function mapel()
    {   
        $data['judul'] = 'Home';
        
        $this->view('templates/header', $data);
        $this->view('Home/mapel', $data);
        $this->view('templates/footer');
    }
}