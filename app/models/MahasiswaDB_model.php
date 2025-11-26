<?php 

// membuat class MahasiswaDB_model untuk kebutuhan controllers/MahasiswaDB.php
class MahasiswaDB_model {
    // membuat koneksi ke database dan mengambil data dari dalam database
    // membuat variabel / parameter
    private $mhsdb;
    private $state;
    
    // membuat koneksi ke database
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=mvcphp';

        // cek mengguunakan block try catch
        try {
            // instansiasi PHP Data Object baru dengan parameter ($dsn, 'nama user', 'password')
            $this->mhsdb = new PDO($dsn, 'root', '');
            // tangkap jika error
        } catch(PDOException $e) {
            // kirimkan data error dengan pesan
            die($e->getMessage());
        }
    }

    // membuat public function getAllMahasiswaDB()
    public function getAllMahasiswaDB()
    {
        // membuat syntax query
        $this->state = $this->mhsdb->prepare('SELECT * FROM mahasiswa');
        // jalankan syntax query
        $this->state->execute();
        // kembalikan nilai dengan hasil FETCH_ASSOC
        return $this->state->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>