<?php 


class Mapel extends Controller{
    public function index()
    {
        $data['tittle'] = 'Mata Pelajaran';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('mata-pelajaran/mapel');
        $this->view('template/footer');
    }
}