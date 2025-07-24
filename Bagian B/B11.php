<!DOCTYPE html>
<html>
<body>

<?php
  
  $s1 = 10;
  $s2 = 6;
  $s3 = 7;
  
  $num = array($s1, $s2, $s3);
  rsort($num);
  
  $a = $num[0];
  $b = $num[1];
  $c = $num[2];
  
  $A = $a**2;
  $B = $b**2;
  $C = $c**2;
  
  if ($a >= $b+$c) {
    echo "Tidak terbentuk segitiga";
  } else if ($A == $B+$C) {
    echo "Sebuah segitiga siku-siku terbentuk";
  } else if ($A > $B + $C) {
    echo "Sebuah segitiga tumpul terbentuk";
  }else if ($a < $B + $C) {
    echo "Sebuah segitiga lancip terbentuk";
  }
  
?>