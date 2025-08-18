<!DOCTYPE html>
<html>
<body>

<?php
    $a = 41;
    $b = 12;
    $c = 11;

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

    echo $a . " - " . $b . " - " . $c;
?>

</body>
</html>