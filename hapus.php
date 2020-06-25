<?php

include("config.php");

if( isset($_GET['id_kabupaten']) ){

    // ambil id dari query string
    $id_kabupaten = $_GET['id_kabupaten'];

    // buat query hapus
    $sql = "DELETE FROM kabupaten WHERE id_kabupaten=$id_kabupaten";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
       echo "<script language='javascript'>
 alert('hapus data Berhasil');
 window.open('list-kabupaten.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('hapus data gagal');
 window.open('list-kabupaten.php','_top')
 </script>";
    }

} else {
    die("akses dilarang...");
}

?>