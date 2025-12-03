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

    // membuat method tambahDataMahasiswaDB
    public function tambahDataMahasiswaDB($data)
    {
        // membuat query insert
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :nim, :email, :jurusan)";

        // menerapkan ke dalam model query
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        // execute query
        $this->db->execute();

        // mengembalikan nilai untuk MahasiswaDB/tambah
        return $this->db->rowCount();
    }

}

?>