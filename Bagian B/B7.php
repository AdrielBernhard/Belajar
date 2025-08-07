<!DOCTYPE html>
<html>
<body>

    <?php
    $v1 = 5;
    $v2 = 2;
    $op = "^";

    $result = match($op) {
        "+" => $v1 + $v2,
        "-" => $v1 - $v2,
        "*" => $v1 * $v2,
        "/" => $v1 / $v2,
        "^" => $v1 ** $v2,
        default => "Operasi tidak valid"
    };
    
    echo "hasilnya adalah : " . $result;
    ?>

</html>
</body>