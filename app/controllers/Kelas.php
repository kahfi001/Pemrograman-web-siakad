<?php

class Kelas extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Kelas';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/kelas');
    $this->view('template/footer');
  }
}
