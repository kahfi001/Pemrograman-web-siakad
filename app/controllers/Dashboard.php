<?php

class Dashboard extends Controller
{
  public function index()
  {

    session_start();
    $data['tittle'] = 'Dashboard';
    $this->view('template/header', $data);
    $this->view('template/navbar', $data);
    $this->view('dashboard/dashboard', $data);
    $this->view('template/footer');
  }
}
