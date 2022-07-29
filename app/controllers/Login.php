<?php

class Login extends Controller
{
    public function indexSiswa()
    {   
        
        $data['judul'] = 'Login';
        
        $this->view('templates/header2');
        $this->view('login_siswa/index', $data);
        $this->view('templates/footer2');
    }

    public function indexGuru()
    {   
        
        $data['judul'] = 'Login';
        
        $this->view('templates/header3');
        $this->view('login_guru/index', $data);
        $this->view('templates/footer3');
    }

    public function loginSiswa()
    {
        if(session_status() === PHP_SESSION_NONE) session_start();
        $email = $_POST ['email'];
        $password = $_POST['password'];
        
        $data['loginSiswa'] = $this->model('Login_model')->getSiswa($email, $password);
        
        if($data['loginSiswa'] == NULL)
        {
          header("Location: " . BASE . "404");
        } else {
          foreach($data['loginSiswa'] as $row) :
          $_SESSION['nama'] = $row['nama'];
          header("Location: " . BASE);
        endforeach;
        }
    }

    public function loginGuru()
    {
        if(session_status() === PHP_SESSION_NONE) session_start();
        $email = $_POST ['email'];
        $password = $_POST['password'];
        
        $data['loginGuru'] = $this->model('Login_model')->getGuru($email, $password);
        
        if($data['loginGuru'] == NULL)
        {
          header("Location: " . BASE . "404");
        } else {
          foreach($data['loginGuru'] as $row) :
          $_SESSION['nama'] = $row['nama'];
          header("Location: " . BASE . "guru");
        endforeach;
        }
    }
  }