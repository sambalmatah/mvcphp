<?php 

class About {
    public function index($nama = 'Yudi Ari', $pekerjaan = 'Programmer')
    {
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }
    
    public function page() 
    {
        echo 'About/page';
    }
}

?>