<!DOCTYPE html>
<html>
<body>

<?php

$a = 5;
$b = 2;
$c = $a;

echo $a . " " . $b . "<br>" ;

$a = $b;
$b = $c;

echo $a . " " . $b . "<br>" ;

?>

</body>
</html>