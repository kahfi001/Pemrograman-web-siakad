<?php

class Dashboard extends Controller
{
  public function index()
  {
    $this->view('template/header');
    $this->view('template/navbar');
    $this->view('dashboard/dashboard');
    $this->view('template/footer');
  }
}
