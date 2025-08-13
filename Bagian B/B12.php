<!DOCTYPE html>
<html>
<body>

<?php
    $jumlah = 250;
    $kode = "r";

    $harga = 0;

    switch (strtoupper($kode)) {
        case 'F':
            if ($jumlah >= 1 && $jumlah <= 50) {
                $harga = 100;
            } elseif ($jumlah <= 100) {
                $harga = 150;
            } else {
                $harga = 250;
            }
            break;
            
        case 'R':
            if ($jumlah >= 1 && $jumlah <= 50) {
                $harga = 400;
            } elseif ($jumlah <= 100) {
                $harga = 700;
            } else {
                $harga = 1000;
            }
            break;
            
        case 'N':
            if ($jumlah >= 1 && $jumlah <= 50) {
                $harga = 750;
            } elseif ($jumlah <= 100) {
                $harga = 1000;
            } else {
                $harga = 1350;
            }
            break;
            
        default:
            echo "Kode tidak valid";
            exit;
    }

    $total_bayar = $jumlah * $harga;

    echo "Anda perlu membayar: $total_bayar Rp";
?>

</body>
</html>