<?php

class Dashboard extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Dashboard';
    $this->view('template/header', $data);
    $this->view('template/navbar', $data);
    $this->view('dashboard/dashboard');
    $this->view('template/footer');
  }
}
