<?php

class ListRaport extends Controller
{
  public function index()
  {
    $data['tittle'] = 'List Raport';
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('raport/listRaport');
    $this->view('template/footer');
  }
}
