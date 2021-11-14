<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['tittle'] = 'Siswa';
    $data['siswa'] = $this->model('siswa_model')->getAllSiswa();
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('dataSekolah/siswa', $data);
    $this->view('template/footer');
  }

  public function ubah()
  {
    if ($this->model('siswa_model')->ubahDataSiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }
  public function addSiswa()
  {
    if ($this->model('siswa_model')->tambahDataSiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('siswa_model')->hapusDataSiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('siswa_model')->getDataUbah($_POST['id']));
  }
}
