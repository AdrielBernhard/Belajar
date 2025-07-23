<!DOCTYPE html>
<html>
<body>

<?php

$a = 2;
$b = 5;
$c = 3;

$numb = array ($a, $b, $c);
sort($numb);

$arrlength = count($numb);
for($x = 0; $x < $arrlength; $x++) {
  echo $numb[$x] . " ";
}

?>

</body>
</html>