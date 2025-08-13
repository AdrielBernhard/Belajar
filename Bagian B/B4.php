<!DOCTYPE html>
<html>
<body>

<?php
    $a = 2;
    $b = 5;
    $c = 3;

    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    if ($b > $c) {
        $temp = $b;
        $b = $c;
        $c = $temp;
        
        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
    }

    echo $a . " " . $b . " " . $c;
?>

</body>
</html>