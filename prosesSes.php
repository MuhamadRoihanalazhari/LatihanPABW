<?php
session_start();
$username = $_POST['username'];
$_SESSION['namauser'] = $username;
$username = $_POST['username'];
echo "Nama user Anda adalah: $username<br><br>";
echo "<a href=hal1a.php>Halaman 1</a>
 <a href=hal2a.php>Halaman 2</a>
 <a href=hal3a.php>Halaman 3</a>";
?>
