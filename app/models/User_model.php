<?php 

// membuat class User_model untuk kebutuhan controllers/Home.php
class User_model {
    // membuat parameter baru dengan nilai $nama = 'Yudi Ari'
    private $nama = 'Mayuth';

    // membuat public function getUser()
    public function getUser()
    {
        // kembalikan nilai $this->nama
        return $this->nama;
    }
}

?>