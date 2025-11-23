<?php 

// membuat class App
class App {
    // membuat property yang aksesnya protected
    // property $controller yang memiliki nilai default 'Home'
    protected $controller = 'Home';
    // property $method yang memiliki nilai default 'index'
    protected $method = 'index';
    // property $params yang memiliki nilai array
    protected $params = [];
    // --> setelah memiliki property default, maka buat controllernya agar bisa diakses
    
    // coba class App sudah berjalan atau belum dengan construct
    public function __construct()
    {
        // mengisi construct $url dengan method parseURL()
        $url = $this->parseURL();

        // menambahkan jika URL kosong maka langsung menuju Home/index
        if ($url === null) {
            $url = [$this->controller, $this->method];
        }

        // ---CONTROLLER---
        // buat agar kita bisa memilah nama yang ditulis di URL
        if( file_exists('../app/controllers/'. $url[0] . '.php') ) {
            // jika ada maka replace url yang ditulis ke dalam nilai default
            $this->controller = $url[0];
            // hapus index araay ke-0 pada array $url
            unset($url[0]);
        }

        // include file controller yang telah dituju dari kondisional
        require_once '../app/controllers/'. $this->controller . '.php';
        // selanjutnya instansiasi diisi dengan instance
        $this->controller = new $this->controller;

        // ---METHOD---
        // periksa apakah ada method url dengan menggunkan isset array[1]
        if( isset($url[1]) ) {
            // periksa method yang ada di dalam controller
            if( method_exists($this->controller, $url[1]) ) {
                // jika ada timpa nilai default $this->method dengan array $url index ke-1
                $this->method = $url[1];
                // unset lagi array $url[1]
                unset($url[1]);
            }
        }

        // ---PARAMS---
        // periksa apakah ada parameter url dengan menggunakan !empty
        if( !empty($url) ) {
            // jika ada timpa nilai default $this->params dengan nama url dengan fungsi array_values()
            $this->params = array_values($url);
        }

        // setelah memiliki CONTROLLER, METHOD & PARAMS, langkah terakhir
        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    // mengambil URL kemudian memecah sesuai dengan keinginan
    public function parseURL()
    {
        // cek jika ada URL
        if( isset($_GET['url']) ) {
            // parameter $url diisi dengan apa yang ditulis diURL 
            // $url = $_GET['url'];
            // tanpa '/' (garis miring) dengan rtrim
            $url = rtrim($_GET['url'], '/');
            // bersihkan karakter yang ngaco atau tidak sesuai
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // pecah urlnya berdasarkan tanda '/'
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>