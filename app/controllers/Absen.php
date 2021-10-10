<?php

class Absen extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Absen';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('absen/absen');
    $this->view('template/footer');
  }
}
