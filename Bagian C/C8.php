<!DOCTYPE html>
<html>
<body>

<?php

$x = 50;

$num = [];

$num[0] = 1;
$num[1] = 2;

// Menghitung deret rekursif hingga suku ke-x
for ($i = 2; $i < $x; $i++) {
    $num[$i] = 2 * $num[$i - 1] + $num[$i - 2];
}

$sum = 0.0;

// Menghitung jumlah deret
for ($n = 1; $n <= $x; $n++) {
    $sign = (-1) ** $n;
    $numerator = $num[$n - 1]; // Menggunakan variabel berbeda untuk pembilang
    $denominator = 2 ** $n;    // Penyebut
    $term = $sign * ($numerator / $denominator);
    $sum += $term;
}

echo "Jumlah deret hingga $x suku adalah: $sum";

?>

</body>
</html>