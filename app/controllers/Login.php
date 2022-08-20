<?php

class Login extends Controller
{
    public function index()
    {   
        
        $data['judul'] = 'Login';
        
        $this->view('templates/header2');
        $this->view('login/index', $data);
        $this->view('templates/footer2');
    }

    public function loginProses ()
    {
      if(session_status() === PHP_SESSION_NONE) session_start();
        $email = $_POST ['email'];
        $password = $_POST['password']; 
        
        $data['login'] = $this->model('Login_model')->getUser($email, $password);
        
        if($data['login'] == NULL)
        {
          Flasher::setFlash('Belum' , 'Terdaftar', 'danger');
          header("Location: " . BASE . '/Login');
          exit;
        } else {
          foreach($data['login'] as $row) :
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['email'] = $row['email'];
            if ($row['level'] == 'guru') {
              header("Location: " . BASE . "/Guru");
            } else {
              ($row['level'] == 'siswa');
              header("Location: " . BASE);
            }
          endforeach;
        }
    }

    public function logout()
    {
      if(session_status() === PHP_SESSION_NONE) session_start();
      unset($_SESSION['nama']);
      session_destroy();
      header("Location: " . 'http://localhost/Ujian/public/Login/loginProses');
      die();
    }
  }

