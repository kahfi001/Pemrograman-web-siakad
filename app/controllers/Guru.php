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

  public function addGuru()
  { 
    if ($this->model('guru_model')->tambahDataGuru($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }
  public function hapus($id)
  {
    if ($this->model('guru_model')->hapusDataGuru($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }
}
