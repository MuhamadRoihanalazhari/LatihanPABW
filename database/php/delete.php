<?php 



 //Mendapatkan Nilai ID
 $NIM = $_GET['NIM'];
 
 //Import File Koneksi Database
 require_once('koneksi.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM Pendaftaran_Praktikum WHERE NIM=$NIM;";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Data';
 }else{
 echo 'Gagal Menghapus Data';
 }
 
 mysqli_close($con);
 ?>