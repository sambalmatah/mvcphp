<!-- membuat view dari controllers/Mahasiswa.php -->

<!-- tag struktur html dibuat menggunakan templates/header.php -->

    <!-- membuat div container milik bootstrap -->
    <div class="container mt-5">
        <!-- membuat row -->
         <div class="row">
            <!-- membuat kolom dengan ukuran 6 -->
            <div class="col-6">
                <!-- membuat judul dengan h3 -->
                <h3>Daftar Mahasiswa DB</h3>
                <!-- buat model -->
                <!-- buat daftar menggunakan iterasi -->
                <?php foreach( $data['mhsdb'] as $mahasiswas ) : ?>
                <ul>
                    <li><?php echo $mahasiswas['nama']; ?></li>
                    <li><?php echo $mahasiswas['nim']; ?></li>
                    <li><?php echo $mahasiswas['email']; ?></li>
                    <li><?php echo $mahasiswas['jurusan']; ?></li>
                </ul>
                <?php endforeach; ?>

            </div>
         </div>

    </div>
    
<!-- tag struktur html dibuat menggunakan templates/footer.php -->