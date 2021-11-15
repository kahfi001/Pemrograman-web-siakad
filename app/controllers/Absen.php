<?php

class Absen extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Absen';
    $data['absenSiswa'] = $this->model('absensi_model')->getSiswaListNow($_SESSION['nip']);
    $this->view('template/header', $data);
    $this->view('template/navbar', $data);
    $this->view('absen/absen', $data);
    $this->view('template/footer');
  }
}
