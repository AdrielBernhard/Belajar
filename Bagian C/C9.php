<!DOCTYPE html>
<html>
<body>

<?php
    $a = 0;
    $b = 1;

    while ($a <= 1000) {
        if ($a % 2 == 0) {
            echo $a . " (GENAP)";
        } else {
            echo $a . " (GASAL)";
        }

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
?>

</body>
</html>