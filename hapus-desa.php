<?php

include("config.php");

if( isset($_GET['id_desa']) ){

    // ambil id dari query string
    $id_desa = $_GET['id_desa'];

    // buat query hapus
    $sql = "DELETE FROM desa WHERE id_desa=$id_desa";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
       echo "<script language='javascript'>
 alert('hapus data Berhasil');
 window.open('list-desa.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('hapus data gagal');
 window.open('list-desa.php','_top')
 </script>";
    }

} else {
    die("akses dilarang...");
}

?>