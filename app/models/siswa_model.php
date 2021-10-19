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
}
