<?php
$w1 = 550;
$w2 = 2005;

$jam1 = floor($w1 / 100);
$menit1 = $w1 % 100;
$menit1 = $jam1 * 60 + $menit1;

$jam2 = floor($w2 / 100);
$menit2 = $w2 % 100;
$menit2 = $jam2 * 60 + $menit2;

if ($menit2 >= $menit1) {
    $selisih = $menit2 - $menit1;
} else {
    $selisih = (1440 - $menit1) + $menit2;
}

echo "Selisih waktu: $selisih menit";
?>