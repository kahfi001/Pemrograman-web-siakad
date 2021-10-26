<?php

class siswa_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSiswa()
  {
    $this->db->query('SELECT * FROM siswa');
    return $this->db->resultSet();
  }

  public function tambahDataSiswa($data)
  {
    $query = "INSERT INTO siswa VALUES ('', :nama, :nis, :kelas, :alamat, :no_hp)";
    $this->db->query($query);
    $this->db->bind('nama', $data['namaSiswa']);
    $this->db->bind('nis', $data['nis']);
    $this->db->bind('kelas', $data['kelas']);
    $this->db->bind('alamat', $data['alamatSiswa']);
    $this->db->bind('no_hp', $data['noHpSiswa']);

    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }
}
