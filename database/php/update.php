<?php 


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$NIM = $_POST['NIM'];
		$Nama = $_POST['Nama'];
		$Kelas = $_POST['Kelas'];
		$Sesi = $_POST['Sesi'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE Pendaftaran_Praktikum SET Nama = '$Nama', Kelas = '$Kelas', Sesi = '$Sesi' WHERE NIM = $NIM;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}
		
		mysqli_close($con);
	}
?>