<?php


class Mapel extends Controller
{
    public function index()
    {
        $data['tittle'] = 'Mata Pelajaran';
        $data['mapel'] = $this->model('mapel_model')->getAllMapel();
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('mata-pelajaran/mapel', $data);
        $this->view('template/footer');
    }

    public function addMapel()
    {
        if ($this->model('mapel_model')->tambahDataMapel($_POST) > 0) {
            header('Location: ' . BASEURL . '/mapel');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('mapel_model')->hapusDataMapel($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mapel');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mapel');
            exit;
        }
    }
}
