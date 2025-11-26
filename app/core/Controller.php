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

    // membuat sebuah method untuk controller method model yang dipanggil dari controllers/Home.php
    public function model($model)
    {
        // panggil modelnya yang ada di dalam folder models/home/User_model.php
        require_once '../app/models/' . $model . '.php';
        // selain itu karena dia class maka instansiasi dulu
        return new $model;
    }
}

?>