<!-- membuat view dari controllers/Home.php -->

<!-- tag struktur html dibuat menggunakan templates/header.php -->

    <!-- membuat div container milik bootstrap -->
    <div class="container">
        <!-- membuat jumbotron milik bootstrap dengan margin top-4 -->
        <div class="jumbotron mt-4">
            <h1 class="display-4">Selamat Datang, di Website saya!</h1>
            <!-- memanggil data melalui models/User_model.php ->> controllers/Home.php melalui models core/Controller.php -->
            <p class="lead">Halo nama saya <?php echo $data['nama']; ?>.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

    </div>
    
<!-- tag struktur html dibuat menggunakan templates/footer.php -->