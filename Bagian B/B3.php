<!DOCTYPE html>
<html>
<body>

<?php
$a = 2;
$b = 5;
$c = 3;

if ($a > $b && $a > $c) {
    $terbesar = "bilangan 1";
} elseif ($b > $a && $b > $c) {
    $terbesar = "bilangan 2";
} else {
    $terbesar = "bilangan 3";
}

echo "$terbesar paling besar";
?>

</body>
</html>