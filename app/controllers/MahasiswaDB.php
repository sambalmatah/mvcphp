<?php 

class MahasiswaDB extends Controller {
    // membuat method index untuk jadi nilai default
    public function index()
    {
        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'Daftar MahasiswaDB';
        // membuat parameter $data['mhs'] sebagai data kompleks dan ditampilkan di view
        // dengan class Mahasiswa_model dan method getAllMahasiswa
        $data['mhsdb'] = $this->model('MahasiswaDB_model')->getAllMahasiswaDB();

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        // panggil template mahasiswadb/index dengan melampirkan $data['mhsdb'] yang diterima dari model
        $this->view('mahasiswadb/index', $data);
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }
}

?>