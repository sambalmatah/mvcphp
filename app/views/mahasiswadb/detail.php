<!-- membuat view dari controllers/MahasiswaDB.php -->

<!-- tag struktur html dibuat menggunakan templates/header.php -->

    <!-- membuat div container milik bootstrap -->
    <div class="container mt-5">
        <!-- membuat card -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['mhsdb']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['mhsdb']['nim']; ?></h6>
                <p class="card-text"><?php echo $data['mhsdb']['email']; ?></p>
                <p class="card-text"><?php echo $data['mhsdb']['jurusan']; ?></p>
                <a href="<?php echo BASEURL; ?>/mahasiswadb" class="card-link">Kembali</a>
            </div>
        </div>

    </div>
    
<!-- tag struktur html dibuat menggunakan templates/footer.php -->