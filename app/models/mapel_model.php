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
        $query = "INSERT INTO mapel VALUES ('', :namaMapel)";
        $this->db->query($query);
        $this->db->bind('nama_mapel', $data['namaMapel']);

        $this->db->execute();

        $count = $this->db->hitungBaris();

        return $count;
    }
}