    <?php 

    class Flasher {
        // buat method static setFlash() untuk membuat flashernya tanpa harus instansiasi
        public static function setFlash($pesan, $aksi, $tipe)
        {
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi'  => $aksi,
                'tipe'  => $tipe
            ];
        }

        // buat method static flash() untuk memanggil alertnya
        public static function flash()
        {
            // mulai session sebelum session digunakan diletakkan di index paling luar
            
            // jika session ada maka jalankan alertnya
            if( isset($_SESSION['flash']) ) {
                echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                        Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                // hapus session karena hanya 1 kali panggil saja
                unset($_SESSION['flash']);
            }
        }

        // require_once di file init

    }

    ?>