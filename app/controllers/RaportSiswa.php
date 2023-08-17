<?php

class RaportSiswa extends Controller {

    public function index()
    {
        $data['tittle'] = 'Raport';
        $data['siswa'] = $this->model('siswa_model')->getSiswaBynis($_SESSION['nip']);
        $data['nilai'] = $this->model('nilai_model')->getNilaiAkhirSiswaTemp($data['siswa']['id']);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('raport/raportSiswa', $data);
        $this->view('template/footer'); 
    }
}