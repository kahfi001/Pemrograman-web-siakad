<?php 

class Home extends Controller{
    public function index ()
    {
        $this->view('template/header');
        $this->view('home/halamanAwal');
        $this->view('template/footer');
    }
}