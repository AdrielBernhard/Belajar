<!DOCTYPE html>
<html>
<body>

<?php
    $a = 7;
    $b = 7;
    $c = 7;

    if ($a > $b && $a > $c) {
        $terbesar = $a;
    } elseif ($b > $a && $b > $c) {
        $terbesar = $b;
    } else {
        $terbesar = $c;
    }

    echo "angka terbesar adalah $terbesar";
?>

</body>
</html>