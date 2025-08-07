<!DOCTYPE html>
<html>
<body>

<?php
$a = 2; // suku pertama
$r = 2; // rasio
$n = 13; // jumlah suku
$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $sum += $a * ($r ** $i);
}

echo "Jumlah semua adalah $sum";
?>

</body>
</html>