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
}
