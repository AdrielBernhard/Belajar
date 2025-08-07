<!DOCTYPE html>
<html>
<body>

<?php
$jumlah = 1500000;

$diskon = 0;
$kategori_diskon = '';

if ($jumlah < 100000) {
    $kategori_diskon = 'tidak dapat diskon';
} elseif ($jumlah <= 200000) {
    $diskon = $jumlah * 7.5 / 100;
    $kategori_diskon = '7.5%';
} elseif ($jumlah <= 350000) {
    $diskon = $jumlah * 10 / 100;
    $kategori_diskon = '10%';
} else {
    $diskon = $jumlah * 15 / 100;
    $kategori_diskon = '15%';
}

$biaya_akhir = $jumlah - $diskon;

if ($jumlah < 100000) {
    echo "Anda tidak dapat diskon, biaya yang dibayar Rp. $biaya_akhir";
} else {
    echo "Anda dapat diskon $kategori_diskon, biaya yang dibayar Rp. $biaya_akhir";
}
?>

</body>
</html>