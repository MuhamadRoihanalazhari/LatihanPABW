<?php
session_start();
echo "Ini adalah Halaman 1<br>";
echo "Nama user Anda adalah:
".$_SESSION['namauser']."
 <br><br>";
echo "<a href=hal1a.php>Halaman 1</a>
 <a href=hal2a.php>Halaman 2</a>
 <a href=hal3a.php>Halaman 3</a>";
?>