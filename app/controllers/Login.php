<?php

class Login extends Controller
{
    public function index()
    {
        $data['tittle'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/login');
        $this->view('template/footer');
    }

    public function prosesLogin()
    {
        $data = $this->model('login_model')->checkLogin($_POST);
        if ($row = $this->model('login_model')->checkLogin($_POST) > 0) {

            session_start();
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['nama'] = $data['nama']; 
            $_SESSION['nip'] = $data['username']; 

            // $_SESSION['session_login'] = 'sudah_login';

            // $this->model('login_model')->isLoggedIn($_SESSION['session_login']);

            header('location: ' . BASEURL . '/dashboard');
            
        } else {
            echo "
            <script>
                alert ('login gagal')
            </script>
        ";
            header('location: ' . BASEURL . '/login');
            exit;
        }
    }
}
