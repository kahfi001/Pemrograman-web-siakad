<?php

class SetMapel extends Controller {
    public function index()
    {
        $data['tittle'] = 'Set Mata Pelajaran';
        $data['kelas'] = $this->model('kelas_model')->getAllKelas();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('mata-pelajaran/setMapel', $data);
        $this->view('template/footer');
    }
}