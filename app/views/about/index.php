<!-- membuat view dari controllers/About.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>
<body>
    <h1>About Me</h1>
    <!-- melampirkan data yang dikirim dari About.php method index ke dalam view html -->
    <p>Halo nama saya <?php echo $data['nama']; ?>, Umur saya <?php echo $data['umur']; ?> tahun, dan saya adalah seorang <?php echo $data['pekerjaan']; ?>.</p>
</body>
</html>