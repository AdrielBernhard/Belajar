<!DOCTYPE html>
<html>
<body>

    <?php
  
    $v1 = 5;
    $v2 = 2;
    $op = "^";
    
    if ($op == "+") {
        echo "hasilnya adalah : " . $v1+$v2;
    } else if ($op == "-") {
        echo "hasilnya adalah : " . $v1-$v2;
    } else if ($op == "*") {
        echo "hasilnya adalah : " . $v1*$v2;
    } else if ($op == "/") {
        echo "hasilnya adalah : " . $v1/$v2;
    } else if ($op == "^") {
        echo "hasilnya adalah : " . $v1**$v2;
    }
  
    ?>

</html>
</body>