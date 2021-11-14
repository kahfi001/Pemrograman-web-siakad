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

  public function getDataSiswaPerkelas($sesi)
  {
    $this->db->query("SELECT siswa.id, siswa.nama, siswa.nis, siswa.kelas, siswa.alamat, siswa.no_hp FROM siswa JOIN kelas ON siswa.kelas = kelas.kelas JOIN guru ON kelas.wali_kelas = guru.nama WHERE kelas.kelas = (SELECT kelas.kelas FROM kelas JOIN guru ON kelas.wali_kelas = guru.nama WHERE guru.nama ="."'".$sesi."'".")");
    return $this->db->resultSet();
  }

  public function getSiswaByid($id)
  {
    $this->db->query('SELECT * FROM siswa WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();

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

  public function hapusDataSiswa($id)
  {
    $query = "DELETE FROM siswa WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }

  public function getDataUbah($id)
  {
    $this->db->query('SELECT * FROM  siswa  WHERE id= :id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function ubahDataSiswa($data)
  {
    $query = "UPDATE siswa SET  
    nama = :namaSiswa, 
    nis = :nis, 
    kelas = :kelas, 
    alamat = :alamatSiswa, 
    no_hp = :noHpSiswa
    WHERE id = :id;
    ";
    $this->db->query($query);
    $this->db->bind('namaSiswa', $data['namaSiswa']);
    $this->db->bind('nis', $data['nis']);
    $this->db->bind('kelas', $data['kelas']);
    $this->db->bind('alamatSiswa', $data['alamatSiswa']);
    $this->db->bind('noHpSiswa', $data['noHpSiswa']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    $count = $this->db->hitungBaris();

    return $count;
  }
}
