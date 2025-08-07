<!DOCTYPE html>
<html>
<body>

<?php

$n = 10;
$num = 0;

for ($i = 0; $i < $n; $i++) {
    echo $num;
    if ($i < $n - 1) echo " ";
    $num += ($i + 1);
}

?>

</body>
</html>