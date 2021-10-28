<?php

class Kelas extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Kelas';
    $data['kelas'] = $this->model('kelas_model')->getAllKelas();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/kelas', $data);
    $this->view('template/footer');
  }

  public function addKelas()
  {
    if ($this->model('kelas_model')->tambahDataKelas($_POST) > 0) {
      header('Location: ' . BASEURL . '/kelas');
      exit;
    }
  }
}
