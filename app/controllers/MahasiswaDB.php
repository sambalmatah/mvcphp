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

    public function detail($id)
    {
        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'Detail MahasiswaDB';
        // membuat parameter $data['mhs'] sebagai data kompleks dan ditampilkan di view
        // dengan class Mahasiswa_model dan method getAllMahasiswa
        $data['mhsdb'] = $this->model('MahasiswaDB_model')->getMahasiswaDBById($id);

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        // panggil template mahasiswadb/index dengan melampirkan $data['mhsdb'] yang diterima dari model
        $this->view('mahasiswadb/detail', $data);
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }

    // Membuat method tambah
    public function tambah()
    {
        // Jika data model->tambahDataMahasiswaDB nilainya lebih dari satu(row)
        if( $this->model('MahasiswaDB_model')->tambahDataMahasiswaDB($_POST) > 0 ) {
            // set flashernya
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        } else {
            // set flashernya
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        }
    }

    // Membuat method hapus
    public function hapus($id)
    {
        // Jika data model->hapusDataMahasiswaDB nilainya lebih dari satu(row)
        if( $this->model('MahasiswaDB_model')->hapusDataMahasiswaDB($id) > 0 ) {
            // set flashernya
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        } else {
            // set flashernya
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        }
    }

    public function getUbah()
    {
        // data dalam bentuk array asosiatif maka perlu dibungkus dengan fungsi json_encode
        echo json_encode($this->model('MahasiswaDB_model')->getMahasiswaDBById($_POST['id']));
    }

    public function ubah()
    {
        // Jika data model->tambahDataMahasiswaDB nilainya lebih dari satu(row)
        if( $this->model('MahasiswaDB_model')->ubahDataMahasiswaDB($_POST) > 0 ) {
            // set flashernya
            Flasher::setFlash('berhasil', 'diubah', 'success');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        } else {
            // set flashernya
            Flasher::setFlash('gagal', 'diubah', 'danger');
            // alihkan lokasi
            header('Location: ' . BASEURL . '/mahasiswadb');
            exit;
        }
    }
}

?>