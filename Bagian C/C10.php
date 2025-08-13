<!DOCTYPE html>
<html>
<body>

<?php
    $n = 3;

    $awal = $n * ($n - 1) + 1;
    $jumlah = 0;
    echo "Deret: ";
    for ($i = 0; $i < $n; $i++) {
        $bilangan = $awal + 2 * $i;
        echo $bilangan;
        if ($i < $n - 1) echo " + ";
        $jumlah += $bilangan;
    }

    echo "\nHasil dari {$n}^3 = $jumlah\n";
?>


</body>
</html>