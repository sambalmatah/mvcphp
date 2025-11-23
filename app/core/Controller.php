<?php 

// membuat class Controller
class Controller {
    // membuat sebuah method untuk controller method view yang dipanggil dari controllers/Home.php
    // isi method view() method dengan 2 nilai. 1 nilai halaman viewnya, 2 paramater dalam bentuk array
    public function view($view, $data = [])
    {
        // panggil viewnya yang ada di dalam folder views/home/index.php
        require_once '../app/views/' . $view . '.php';
    }
}

?>