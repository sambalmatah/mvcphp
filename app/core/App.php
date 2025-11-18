<?php 

// membuat class App
class App {
    // coba class App sudah berjalan atau belum dengan construct
    public function __construct()
    {
        // mengisi construct $url dengan method parseURL()
        $url = $this->parseURL();
        var_dump($url);
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