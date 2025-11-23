<?php 

// membuat class Home untuk jadi nilai default
class Home extends Controller {
    // membuat method index untuk jadi nilai default
    public function index()
    {
        // membuat parameter $data['judul'] agar template/header.php dapat dinamis
        $data['judul'] = 'Home';

        // panggil method view yang ada di dalam folder view
        // panggil template header pada folder templates/header.php
        $this->view('templates/header', $data);
        $this->view('home/index');
        // panggil template header pada folder templates/footer.php
        $this->view('templates/footer');
    }
}

?>