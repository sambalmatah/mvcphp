<?php 

// membuat class Mahasiswa untuk jadi nilai default
class Mahasiswa extends Controller {
    // membuat method index untuk jadi nilai default
    public function index()
    {
        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'Daftar Mahasiswa';
        // membuat parameter $data['mhs'] sebagai data kompleks dan ditampilkan di view
        // dengan class Mahasiswa_model dan method getAllMahasiswa
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        // panggil template mahasiswa/index dengan melampirkan $data['mhs'] yang diterima dari model
        $this->view('mahasiswa/index', $data);
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }
}

?>