<?php

class Raport extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Dashboard';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('raport/raport');
    $this->view('template/footer');
  }
}
