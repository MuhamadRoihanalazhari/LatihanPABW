<?php

include("config.php");

if( isset($_GET['id_kecamatan']) ){

    // ambil id dari query string
    $id_kecamatan = $_GET['id_kecamatan'];

    // buat query hapus
    $sql = "DELETE FROM kecamatan WHERE id_kecamatan=$id_kecamatan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
       echo "<script language='javascript'>
 alert('hapus data Berhasil');
 window.open('list-kecamatan.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('hapus data gagal');
 window.open('list-kecamatan.php','_top')
 </script>";
    }

} else {
    die("akses dilarang...");
}

?>