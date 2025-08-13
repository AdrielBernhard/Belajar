<!DOCTYPE html>
<html>
<body>

<?php
$a = 2;
$b = 5;
$c = 3;

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