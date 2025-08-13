<!DOCTYPE html>
<html>
<body>

<?php
  $a = 100;
  $b = -150;
  $c = -5;

  for ($x = $a; $x >= $b; $x+=$c) {
    echo "$x ";
  }

  $x = $a;
  do {
    echo "$x ";
    $x += $c;
  } while ($x >= $b);

  $y = $a;
  while ($y >= $b) {
    echo "$y ";
    $y += $c;
  }
?>

</body>
</html>