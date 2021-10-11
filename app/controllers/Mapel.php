<?php 


class Mapel extends Controller{
    public function index()
    {
        $data['tittle'] = 'Mata Pelajaran';
        $data['mapel'] = $this->model('mapel_model')->getAllMapel();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('mata-pelajaran/mapel', $data);
        $this->view('template/footer');
    }

    public function addMapel()
    {
        if ($this->model('mapel_model')->tambahDataMapel($_POST) > 0) {
            header('Location: ' . BASEURL . '/mapel');
            exit;
        }
    }
}