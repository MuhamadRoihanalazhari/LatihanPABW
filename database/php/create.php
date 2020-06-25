<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$Nama = $_POST['Nama'];
		$Kelas = $_POST['Kelas'];
		$Sesi = $_POST['Sesi'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO Pendaftaran_Praktikum (Nama,Kelas,Sesi ) VALUES ('$Nama','$Kelas','$Sesi')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>