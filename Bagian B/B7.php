<!DOCTYPE html>
<html>
<body>

    <?php
    $v1 = 5;
    $v2 = 2;
    $op = "^";
    
    switch($op) {
        case "+":
            $hasil = $v1 + $v2;
            break;
        case "-":
            $hasil = $v1 - $v2;
            break;
        case "*":
            $hasil = $v1 * $v2;
            break;
        case "/":
            $hasil = $v1 / $v2;
            break;
        case "^":
            $hasil = $v1 ** $v2;
            break;
        default:
            $hasil = "Operasi tidak valid";
    }
    
    echo "hasilnya adalah : " . $hasil;
    ?>

</body>
</html>