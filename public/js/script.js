// ketika dokumen sudah siap, jalankan fungsi di dalamnya (menggantikan fungsi ready)
$(function () {
    // cari elemen dengan class tombolTambahData, saat klik jalankan fungsi
    $(".tombolTambahData").on("click", function () {
        // cari elemen dengan id judulModal ubah isinya dengan 'Tambah Data Mahasiswa'
        $("#judulModal").html("Tambah Data Mahasiswa");
        // cari elemen dengan class modal-footer dan button type=submit ubah isinya dengan 'Tambah Data'
        $(".modal-footer button[type=submit]").html("Tambah Data");
    });

    // cari elemen dengan class tampilModalubah, saat klik jalankan fungsi
    $(".tampilModalUbah").on("click", function () {
        // cari elemen dengan id judulModal ubah isinya dengan 'Ubah Data Mahasiswa'
        $("#judulModal").html("Ubah Data Mahasiswa");
        // cari elemen dengan class modal-footer dan button type=submit ubah isinya dengan 'Ubah Data'
        $(".modal-footer button[type=submit]").html("Ubah Data");
        $(".modal-body form").attr(
            "action",
            "http://localhost/mvcphp/public/MahasiswaDB/ubah"
        );

        // membuat variabel id. dengan isian tombol yang diklik dengan data dengan nama id
        const id = $(this).data("id");

        // jalankan ajax memiliki parameter dan bentuknya objek makanya tambahkan kurung kurawal
        $.ajax({
            // jalankan url ini
            url: "http://localhost/mvcphp/public/mahasiswadb/getubah",
            // sambil mengirimkan data id
            data: { id: id },
            // dengan menggunakan method post
            method: "post",
            // dan mengembalikan data json
            dataType: "json",
            // jika berhasil lakukan
            success: function (data) {
                $("#nama").val(data.nama);
                $("#nim").val(data.nim);
                $("#email").val(data.email);
                $("#jurusan").val(data.jurusan);
                $("#id").val(data.id);
            },
        });
    });
});
