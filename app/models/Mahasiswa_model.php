<?php 

// membuat class Mahasiswa_model untuk kebutuhan controllers/Mahasiswa.php
class Mahasiswa_model {
    // membuat parameter baru dengan nilai $mhs = []
    private $mhs = [
        [
            "nama" => "Yudi Ari",
            "nim" => "NIM0001",
            "email" => "yudiari@gmail.com",
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Ari Nugroho",
            "nim" => "NIM0002",
            "email" => "arinugroho@gmail.com",
            "jurusan" => "Teknik Informasi"
        ],
        [
            "nama" => "Nugroho Yudi",
            "nim" => "NIM0003",
            "email" => "nugrohoyudi@gmail.com",
            "jurusan" => "Teknik Komputer"
        ]
    ];

    // membuat public function getAllMahasiswa()
    public function getAllMahasiswa()
    {
        // kembalikan nilai $this->mhs
        return $this->mhs;
    }

}

?>