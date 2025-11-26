<!-- membuat template header untuk seluruh tampilan -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
</head>
<body>

    <!-- membuat navbar bootstap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- membuat container milik bootstrap -->
        <div class="container">
            <!-- href diarahkan ke BASEURL agar mengarah ke Home -->
            <a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- href diarahkan ke BASEURL agar mengarah ke Home -->
                    <a class="nav-item nav-link active" href="<?php echo BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                    <!-- href diarahkan ke BASEURL agar mengarah ke Mahasiswa -->
                    <!-- Tambah satu menu 'mahasiswa' -->
                    <a class="nav-item nav-link" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    <!-- href diarahkan ke BASEURL agar mengarah ke MahasiswaDB -->
                    <!-- Tambah satu menu 'mahasiswadb' -->
                    <a class="nav-item nav-link" href="<?php echo BASEURL; ?>/mahasiswadb">MahasiswaDB</a>
                    <!-- href diarahkan ke BASEURL agar mengarah ke About -->
                    <a class="nav-item nav-link" href="<?php echo BASEURL; ?>/about">About</a>
                </div>
            </div>

        </div>
    </nav>