<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Simpan'])){

    // ambil data dari formulir
    $nama_kabupaten     =$_POST ['nama_kabupaten'];
    $ibukota_kabupaten  =$_POST ['ibukota_kabupaten'];
    $luas_wilayah       =$_POST ['luas_wilayah'];

    // buat query
    $sql = "INSERT INTO kabupaten (nama_kabupaten,ibukota_kabupaten,luas_wilayah) VALUE ('$nama_kabupaten', '$ibukota_kabupaten', '$luas_wilayah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: form-daftar.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-daftar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>