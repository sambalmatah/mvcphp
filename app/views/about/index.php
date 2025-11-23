<!-- membuat view dari controllers/About.php -->

<!-- tag struktur html dibuat menggunakan templates/header.php -->
    <!-- membuat div container milik bootstrap -->
    <div class="container">
        <h1 class="mt-4">About Me</h1>
        <img src="<?php echo BASEURL; ?>/img/stingray-silhouette.png" alt="Pak Ari" width="200px" class="rounded-circle shadow">
        <!-- melampirkan data yang dikirim dari About.php method index ke dalam view html -->
        <p>Halo nama saya <?php echo $data['nama']; ?>, Umur saya <?php echo $data['umur']; ?> tahun, dan saya adalah seorang <?php echo $data['pekerjaan']; ?>.</p>
        
    </div>

<!-- tag struktur html dibuat menggunakan templates/footer.php -->