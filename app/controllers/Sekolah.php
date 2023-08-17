<?php

class Sekolah extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Sekolah';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/sekolah');
    $this->view('template/footer');
  }
}
