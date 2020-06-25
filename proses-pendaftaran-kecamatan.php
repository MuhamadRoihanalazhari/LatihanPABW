<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $jumlah_desa = $_POST['jumlah_desa'];
    $id_kabupaten = $_POST['id_kabupaten'];
    
    // buat query
    $sql = "INSERT INTO kecamatan (id_kabupaten, nama_kecamatan, jumlah_desa ) VALUES ('$id_kabupaten', '$nama_kecamatan', '$jumlah_desa')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "<script language='javascript'>
 alert('Proses simpan data Berhasil');
 window.open('list-kecamatan.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('data tidak lengkap');
 window.open('form-input-kecamatan.php','_top')
 </script>";
 
    }


} else {
    die("Akses dilarang...");
}

?>