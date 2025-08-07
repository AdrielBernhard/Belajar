<?php

$x = 10;
$num = [0, 1];
$a = 0;
$b = 0;

for ($n = 2; $n <= $x; $n++) {
  $a = $n - 1;
  $b = $n - 2;
  $y = $num[$a] + $num[$b];
  $num[$n] = $y;
}

foreach ($num as $x) {
  echo "$x ";
}

?>