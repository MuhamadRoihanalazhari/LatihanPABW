<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Update'])){

    // ambil data dari formulir
    $id_kabupaten       =$_POST ['id_kabupaten'];
    $nama_kabupaten     =$_POST ['nama_kabupaten'];
    $ibukota_kabupaten  =$_POST ['ibukota_kabupaten'];
    $luas_wilayah       =$_POST ['luas_wilayah'];

   
// buat query update
$sql = "UPDATE kabupaten SET nama_kabupaten='$nama_kabupaten',ibukota_kabupaten=
'$ibukota_kabupaten',luas_wilayah='$luas_wilayah' WHERE id_kabupaten=$id_kabupaten";
$query = mysqli_query($db, $sql);

// apakah query update berhasil?
if( $query ) {
    echo "<script language='javascript'>
 alert('Proses update data Berhasil');
 window.open('list-kabupaten.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('update gagal');
 window.open('list-kabupaten.php','_top')
 </script>";
}


} else {
die("Akses dilarang...");
}

?>