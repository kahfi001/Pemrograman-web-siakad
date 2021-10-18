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

    public function tambahDataMapel($data)
    {
        $query = 'INSERT INTO mapel (nama_mapel) VALUES (:nama_mapel)';
        $this->db->query($query);
        $this->db->bind('nama_mapel', $data['nama_mapel']);

        $this->db->execute();

        $count = $this->db->hitungBaris();

        return $count;
    }
}