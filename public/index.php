<?php 

// jika tidak ada session yang jalan maka jalankan session
if( !session_id() ) {
    session_start();
}

// memanggil file init sebagai file inisialisasi seluruh file
require_once '../app/init.php';

// jalankan atau instansiasi kelas App yang sudah dibuat
$app = new App;

?>