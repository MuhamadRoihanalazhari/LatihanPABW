<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama_desa = $_POST['nama_desa'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];
    $id_kecamatan = $_POST['id_kecamatan'];
    
    // buat query
    $sql = "INSERT INTO desa (id_kecamatan, nama_desa, jumlah_penduduk) VALUES ('$id_kecamatan', '$nama_desa', '$jumlah_penduduk')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "<script language='javascript'>
 alert('Proses simpan data Berhasil');
 window.open('list-desa.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('data tidak lengkap');
 window.open('form-input-desa.php','_top')
 </script>";
 
    }


} else {
    die("Akses dilarang...");
}

?>