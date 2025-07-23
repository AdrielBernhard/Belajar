<!DOCTYPE html>
<html>
<body>

<?php

$x = 123456;

$satuan = $x % 10;
$puluhan = ($x / 10) % 10;
$ratusan = ($x / 100) % 10;
$ribuan = ($x / 1000) % 10;
$puluhribuan = ($x / 10000) % 10;
$ratusribuan = ($x / 100000) % 10;

echo "Satuan: " . $satuan . "<br>";
echo "Puluhan: " . $puluhan . "<br>";
echo "Ratusan: " . $ratusan. "<br>";
echo "Ribuan: " . $ribuan. "<br>";
echo "Puluh-Ribuan: " . $puluhribuan. "<br>";
echo "ratus-Ribuan: " . $ratusribuan . "<br>";

$i = 1;

$y = ((int)($x / pow(10, $i-1))) % 10;

echo "bilangang ke-$i : $y";

?>

</body>
</html>