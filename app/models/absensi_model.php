<?php

class absensi_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getSiswaListNow($nip)
    {
        $this->db->query("SELECT siswa.id as id_siswa, siswa.nis, siswa.nama, kelas.wali_kelas FROM siswa 
        JOIN kelas ON siswa.kelas = kelas.kelas
        JOIN guru ON kelas.wali_kelas = guru.nama 
        WHERE guru.nip = $nip AND siswa.id NOT IN (SELECT absensi.id_siswa FROM absensi WHERE absensi.tanggal = DATE_FORMAT(now(),".'"'."%Y-%m-%d".'"'."))");
        return $this->db->resultSet();
    }

    public function inputAbsen($data)
    {
        $query = 'INSERT INTO absensi (tanggal, id_siswa, nip_guru) VALUES (now(), :id_siswa, :nip_guru)';
        $this->db->query($query);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->bind('nip_guru', $data['nip_guru']);

        $this->db->execute();

        $count = $this->db->hitungBaris();

        return $count;
    }
}