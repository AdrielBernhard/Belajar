<!DOCTYPE html>
<html>
<body>

<?php
  
  $a = 4;
  $b = 3;
  $c = 5;
  
  if ($c < $a || $c < $b) {
    if ($a > $b) {
      $temp = $c;
      $c = $a;
      $a = $temp;
    } else {
      $temp = $c;
      $c = $b;
      $b = $temp;
    }
  }
  
  $A = $a ** 2;
  $B = $b ** 2;
  $C = $c ** 2;
  
  if ($A + $B == $C){
    $hasil = "benar";
  } else {
    $hasil = "salah";
  }

  echo "3 angka ini adalah Triplet Phytagoras $hasil"
  
?>

</body>
</html>