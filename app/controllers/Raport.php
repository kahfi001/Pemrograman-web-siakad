<?php

class Raport extends Controller
{
  public function index($id)
  {
    $data['tittle'] = 'Raport';
    $data['detailSiswa'] = $this->model('siswa_model')->getSiswaByid($id);
    $data['mapel'] = $this->model('mapel_model')->getAllMapel();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('raport/raport', $data);
    $this->view('template/footer');
  }
}
