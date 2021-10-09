<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Siswa';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/siswa');
    $this->view('template/footer');
  }
}
