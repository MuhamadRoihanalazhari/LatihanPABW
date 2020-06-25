<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama_kabupaten = $_POST['nama_kabupaten'];
    $ibukota_kabupaten = $_POST['ibukota_kabupaten'];
    $luas_wilayah = $_POST['luas_wilayah'];
    
    // buat query
    $sql = "INSERT INTO kabupaten (nama_kabupaten, ibukota_kabupaten, luas_wilayah) VALUE ('$nama_kabupaten', '$ibukota_kabupaten', '$luas_wilayah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "<script language='javascript'>
 alert('Proses simpan data Berhasil');
 window.open('list-kabupaten.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('Proses data tidak lengkap');
 window.open('form-daftar.php','_top')
 </script>";
 
    }


} else {
    die("Akses dilarang...");
}

?>