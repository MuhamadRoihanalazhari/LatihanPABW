 <?php
$db_host = 'localhost'; // Nama Server
$db_user = 'tifecom_em'; // User Server
$db_pass = 'rOIHANAZHARI'; // Password Server
$db_name = 'tifecom_em'; // Nama Database

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>