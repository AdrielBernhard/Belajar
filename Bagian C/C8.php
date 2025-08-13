<!DOCTYPE html>
<html>
<body>

<?php
    $x = 50;

    $prev_prev = 1;
    $prev = 2;
    $current = 0;

    $sum = 0;

    $sign = (-1) ** 1;
    $numerator = 1;
    $denominator = 2 ** 1;
    $term = $sign * ($numerator / $denominator);
    $sum += $term;

    $sign = (-1) ** 2;
    $numerator = 2;
    $denominator = 2 ** 2;
    $term = $sign * ($numerator / $denominator);
    $sum += $term;

    for ($n = 3; $n <= $x; $n++) {
        $current = 2 * $prev + $prev_prev;
        
        $sign = (-1) ** $n;
        $numerator = $current;
        $denominator = 2 ** $n;
        $term = $sign * ($numerator / $denominator);
        $sum += $term;
        
        $prev_prev = $prev;
        $prev = $current;
    }

    echo "Jumlah deret hingga $x suku adalah: $sum";
?>

</body>
</html>