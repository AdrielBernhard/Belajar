<!DOCTYPE html>
<html>
<body>
    
<?php
$n = 10000000;
$b = 5;
$t = 3;
$pajak = 15;

$bunga_bersih_per_tahun = $b * (1 - ($pajak / 100));

$h = $n;

for ($tahun = 1; $tahun <= $t; $tahun++) {
    $bunga_tahunan = $h * ($bunga_bersih_per_tahun / 100);
    $h += $bunga_tahunan;
}

echo "Hasil Deposito setelah $t tahun:\n";
echo "Awal: Rp $n";
echo "Akhir: Rp $h";
echo "Bunga bersih: $h-$n";

?>

</body>
</html>