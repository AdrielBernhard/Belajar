<!DOCTYPE html>
<html>
<body>

<?php

$a = 5;
$b = 2;

echo $a . " " . $b . "<br>" ;

$c = $a;
$a = $b;
$b = $c;

echo $a . " " . $b . "<br>" ;

?>

</body>
</html>