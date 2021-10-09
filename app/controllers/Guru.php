<?php

class Guru extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Guru';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/guru');
    $this->view('template/footer');
  }
}
