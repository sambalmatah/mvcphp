<!-- membuat view dari controllers/Mahasiswa.php -->

<!-- tag struktur html dibuat menggunakan templates/header.php -->

    <!-- membuat div container milik bootstrap -->
    <div class="container mt-3">
        <!-- membuat row untuk flasher -->
        <div class="row">
            <!-- membuat kolom untuk flasher -->
            <div class="col-lg-6">
                <!-- memanggil static function flash -->
                <?php Flasher::flash(); ?>
                <!-- ngesetnnya ke file controller/MahasiswaDB.php di method tambah -->
            </div>
        </div>
        <!-- membuat row -->
         <div class="row">
            <!-- membuat kolom dengan ukuran 6 -->
            <div class="col-lg-6">
                <!-- membuat button untuk modal milik bootstrap -->
                <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#tambahDataModal">
                    Tambah Data Mahasiswa
                </button>
                <br>
                <br>
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
                        <div class="btn-wrapper">
                            <!-- membuat bedges dan memanggil anchor ke file BASEURL/mahasiswadb/detail/id -->
                            <a href="<?php echo BASEURL; ?>/mahasiswadb/detail/<?php echo $mahasiswas['id']; ?> " class="badge badge-primary">detail</a>
                            <!-- membuat bedges dan memanggil anchor ke file BASEURL/mahasiswadb/ubah/id dan menambah atribut modal -->
                            <a href="<?php echo BASEURL; ?>/mahasiswadb/ubah/<?php echo $mahasiswas['id']; ?> " class="badge badge-warning tampilModalUbah" data-toggle="modal" data-target="#tambahDataModal" data-id="<?php echo $mahasiswas['id']; ?>">ubah</a>
                            <!-- membuat bedges dan memanggil anchor ke file BASEURL/mahasiswadb/hapus/id -->
                            <a href="<?php echo BASEURL; ?>/mahasiswadb/hapus/<?php echo $mahasiswas['id']; ?> " class="badge badge-danger" onclick="return confirm('yakin ingin menghapus data ini?')">hapus</a>

                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
         </div>

    </div>

    <!-- Modal -->
    <!-- membuat modal milik bootstrap dan diletakkan dipaling bawah -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo BASEURL; ?>/MahasiswaDB/tambah" method="post">
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="masukan nama mahasiswa...">
                </div>
                <div class="form-group">
                    <label for="nim">NIM Mahasiswa</label>
                    <input type="text" class="form-control" id="nim" name="nim"  placeholder="masukan nim mahasiswa...">
                </div>
                <div class="form-group">
                    <label for="email">Email Mahasiswa</label>
                    <input type="email" class="form-control" id="email" name="email"  placeholder="masukan email mahasiswa...">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                    <option value="">--</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    
<!-- tag struktur html dibuat menggunakan templates/footer.php -->