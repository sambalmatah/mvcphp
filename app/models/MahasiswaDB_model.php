<?php 

// membuat class MahasiswaDB_model untuk kebutuhan controllers/MahasiswaDB.php
class MahasiswaDB_model {
    // membuat model spesifik tabel
    private $table = 'mahasiswa';
    // menampung variabel class db
    private $db;

    public function __construct()
    {
        // instansiasi class Database
        $this->db = new Database;
    }

    // membuat public function getAllMahasiswaDB()
    public function getAllMahasiswaDB()
    {
        // jalankan syntax query
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // membuat public function getMahasiswaDBById($id)
    public function getMahasiswaDBById($id)
    {
        // jalankan syntax query
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();;
    }
}

?>