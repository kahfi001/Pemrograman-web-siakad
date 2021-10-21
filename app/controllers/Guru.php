<?php

class Guru extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Guru';
    $data['guru'] = $this->model('guru_model')->getAllGuru();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/guru', $data);
    $this->view('template/footer');
  }
}
