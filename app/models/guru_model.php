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
}
