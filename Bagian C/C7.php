<!DOCTYPE html>
<html>
<body>

<?php
    $N = 5;

    if (!is_int($N) || $N <= 0) {
        echo "N harus bilangan bulat positif.";
    } else {
        $sum = 1001;
        for ($i = 0; $i < $N; $i++) {
            $term = 2 ** $i;
            if ($i % 2 == 0) {
                $sum -= $term;
            } else {
                $sum += $term;
            }
        }

        echo "Jumlah deret untuk N = $N adalah $sum";
    }
?>

</body>
</html>