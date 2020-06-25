<?php
 /*
 
 Nama Database yang telah dibuat bernama "db_android" 
 Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database 
 sesuai dengan nama database yang kalian buat
 */
 
 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','id14067342_pabwroihan');
 define('PASS','1O4~04V)NAiFego^');
 define('DB','id14067342_pabwroihan0108');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>