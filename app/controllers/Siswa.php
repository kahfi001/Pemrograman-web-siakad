<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Siswa';
    $data['siswa'] = $this->model('siswa_model')->getAllSiswa();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/siswa', $data);
    $this->view('template/footer');
  }
  public function addSiswa()
  {
    if ($this->model('siswa_model')->tambahDataSiswa($_POST) > 0) {
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }
}
