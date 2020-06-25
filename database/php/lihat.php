<?php 

 
	$NIM = $_GET['NIM'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM Pendaftaran_Praktikum WHERE NIM=$NIM";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"NIM"=>$row['NIM'],
			"Nama"=>$row['Nama'],
			"Kelas"=>$row['Kelas'],
			"Sesi"=>$row['Sesi']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>