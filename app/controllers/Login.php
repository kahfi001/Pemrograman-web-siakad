<?php 

class Login extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('login/login');
        $this->view('template/footer');
    }
}