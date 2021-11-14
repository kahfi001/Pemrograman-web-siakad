<?php

class Kelas extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Kelas';
    $data['kelas'] = $this->model('kelas_model')->getAllKelas();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/kelas', $data);
    $this->view('template/footer');
  }

  public function addKelas()
  {
    if ($this->model('kelas_model')->tambahDataKelas($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/kelas');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/kelas');
      exit;
    }
  }
}
