<?php
function Kalikan($x, $y)
{
 $hasil = $x * $y;
 return $hasil;
}
$bil = 2;
echo "Nilai bil mula-mula adalah ". $bil ."<br>";
$bil = Kalikan(3, 4);
echo "Nilai bil setelah memanggil function adalah "
. $bil ."<br>";
?>