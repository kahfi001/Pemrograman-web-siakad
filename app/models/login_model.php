<?php

class login_model
{
  private $table = 'users';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function checkLogin($data)
  {
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    //return $this->db->rowCount();
    $data =  $this->db->single();
    return $data;
  }
}
