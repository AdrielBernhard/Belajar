<!DOCTYPE html>
<html>
<body>

<?php
  $s1 = 10;
  $s2 = 6;
  $s3 = 7;
  
  if ($s1 >= $s2 && $s1 >= $s3) {
    $a = $s1;
    $b = $s2;
    $c = $s3;
  } elseif ($s2 >= $s1 && $s2 >= $s3) {
    $a = $s2;
    $b = $s1;
    $c = $s3;
  } else {
    $a = $s3;
    $b = $s1;
    $c = $s2;
  }
  
  if ($b < $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
  }
  
  $A = $a * $a;
  $B = $b * $b;
  $C = $c * $c;
  
  if ($a >= $b + $c) {
    $bentuk = "tidak ada";
  } elseif ($A == $B + $C) {
    $bentuk = "Segitiga siku-siku";
  } elseif ($A > $B + $C) {
    $bentuk = "Segitiga tumpul";
  } else {
    $bentuk = "Segitiga lancip";
  }
  
  echo "Segitiga yang terbentuk adalah $bentuk";
?>

</body>
</html>