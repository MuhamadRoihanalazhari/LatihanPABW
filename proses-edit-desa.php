<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Update'])){

    // ambil data dari formulir
    $id_desa       =$_POST ['id_desa'];
    $nama_desa     =$_POST ['nama_desa'];
    $jumlah_penduduk  =$_POST ['jumlah_penduduk'];
    $id_kecamatan       =$_POST ['id_kecamatan'];
   

   
// buat query update
$sql = "UPDATE desa SET nama_desa='$nama_desa',jumlah_penduduk=
'$jumlah_penduduk', id_kecamatan='$id_kecamatan' WHERE id_desa=$id_desa";
$query = mysqli_query($db, $sql);

// apakah query update berhasil?
if( $query ) {
    echo "<script language='javascript'>
 alert('Proses update data Berhasil');
 window.open('list-desa.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('update gagal');
 window.open('list-desa.php','_top')
 </script>";
}


} else {
die("Akses dilarang...");
}

?>