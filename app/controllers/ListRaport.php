<?php

class ListRaport extends Controller
{
  public function index()
  {
    $data['tittle'] = 'List Raport';
    $data['siswa'] = $this->model('siswa_model')->getDataSiswaPerkelas($_SESSION['nama']);
    $this->view('template/header', $data);
    $this->view('template/navbar', $data);
    $this->view('raport/listRaport', $data);
    $this->view('template/footer');
  }
}
