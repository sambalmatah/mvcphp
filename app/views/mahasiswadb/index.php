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
                <!-- menggunakan template list group bootstrap -->
                <ul class="list-group">
                    <?php foreach( $data['mhsdb'] as $mahasiswas ) : ?>
                    <!-- menggunakan flexbox bootstrap -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $mahasiswas['nama']; ?>
                        <!-- membuat bedges dan memanggil anchor ke file BASEURL/mahasiswadb/detail/id -->
                        <a href="<?php echo BASEURL; ?>/mahasiswadb/detail/<?php echo $mahasiswas['id']; ?> " class="badge badge-primary">detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
         </div>

    </div>
    
<!-- tag struktur html dibuat menggunakan templates/footer.php -->