<?php 


class mapel_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;    
    }

    public function getAllMapel()
    {
        $this->db->query('SELECT * FROM mapel');
        return $this->db->resultSet();
    }
}