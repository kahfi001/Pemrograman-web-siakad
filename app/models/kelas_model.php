<?php

class kelas_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKelas()
  {
    $this->db->query('SELECT * FROM kelas');
    return $this->db->resultSet();
  }

  public function tambahDataKelas($data)
  {
    $query = "INSERT INTO kelas VALUES ('', :kelas, :wali_kelas , :jumlah_murid)";
    $this->db->query($query);
    $this->db->bind('kelas', $data['kelas']);
    $this->db->bind('wali_kelas', $data['waliKelas']);
    $this->db->bind('jumlah_murid', $data['jumlahMurid']);
    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }
}
