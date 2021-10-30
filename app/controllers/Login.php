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
        if ($row = $this->model('login_model')->checkLogin($_POST) > 0) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
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
