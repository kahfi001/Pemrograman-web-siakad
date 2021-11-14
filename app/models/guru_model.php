<?php

class guru_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllGuru()
  {
    $this->db->query('SELECT * FROM guru');
    return $this->db->resultSet();
  }

  public function getDataGuruTersedia()
  {
    $this->db->query('SELECT * FROM guru WHERE guru.nama NOT IN (SELECT kelas.wali_kelas FROM kelas)');
    return $this->db->resultSet();
  }

  public function tambahDataGuru($data)
  {
    $query = "INSERT INTO guru VALUES ('', :nama, :nip , :alamat, :email, :no_hp)";
    $this->db->query($query);
    $this->db->bind('nama', $data['namaGuru']);
    $this->db->bind('nip', $data['nip']);
    $this->db->bind('alamat', $data['alamatGuru']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('no_hp', $data['noHpGuru']);

    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }

  public function hapusDataGuru($id)
  {
    $query = "DELETE FROM guru WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }
}
