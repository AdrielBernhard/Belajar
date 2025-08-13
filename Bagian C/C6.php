<!DOCTYPE html>
<html>
<body>

<?php
    $a = 2;
    $r = 2;
    $n = 13;
    $sum = 0;

    for ($i = 0; $i < $n; $i++) {
        $sum += $a * ($r ** $i);
    }

    echo "Jumlah semua adalah $sum";
?>

</body>
</html>