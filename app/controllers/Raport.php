<?php

class Raport extends Controller
{
  public function index($id)
  {
    $data['tittle'] = 'Raport';
    $data['detailSiswa'] = $this->model('siswa_model')->getSiswaByid($id);
    $data['mapel'] = $this->model('mapel_model')->getAllMapel();
    $data['inputNilai'] = $this->model('nilai_model')->getNilaiByIdSiswa($id);
    $this->view('template/header', $data);
    $this->view('template/navbar');
    $this->view('raport/raport', $data);
    $this->view('template/footer');
  }

  public function addPenilaian($id)
  {
    $data['detailSiswa'] = $this->model('siswa_model')->getSiswaByid($id);

    if ($this->model('nilai_model')-> tambahDataPenilaian($_POST) > 0) {
      header('Location: ' . BASEURL . '/raport/' . $data['detailSiswa']['id']);
      exit;
    } else {
      header('Location: ' . BASEURL . '/raport');
      exit;
    }
  }
}
