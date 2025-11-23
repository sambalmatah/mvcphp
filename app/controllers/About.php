<?php 

class About extends Controller {
    public function index($nama = 'Yudi Ari', $pekerjaan = 'Programmer', $umur = '32')
    {
        // untuk mengirim data perlu inisialisasi parameter dengan array
        // buat dengan array asosiatif(punya key:value)
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'About';

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }
    
    public function page() 
    {
        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'Page';

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        $this->view('about/page');
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }
}

?>