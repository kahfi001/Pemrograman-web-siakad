<?php 

class Home extends Controller{
    public function index ()
    {
        $data['tittle'] = 'Selamat Datang';
        $this->view('template/header', $data);
        $this->view('home/halamanAwal');
        $this->view('template/footer');
    }
}