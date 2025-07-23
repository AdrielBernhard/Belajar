<!DOCTYPE html>
<html>
<body>

<?php
  
  $w1 = 2030;
  $w2 = 1510;
  $w3 = strlen((string) $w1);
  $w4 = strlen((string) $w2);
  
  if ($w1 < $w2) {
    
    if ($w3 == 4) {
      $a = (int) substr((string) $w1, 0, 2);
    } else if ($w3 == 3) {
      $a = (int) substr((string) $w1, 0, 1);
    } 
    if ($w4 == 4) {
      $b = (int) substr((string) $w2, 0, 2);
    }else if ($w4 == 3) {
      $b = (int) substr((string) $w2, 0, 1);
    }
    $c = $w1 % 100;
    $d = $w2 % 100;
    
    $e = $c - $d;
    $f = (($b - $a) * 60) - $e;
    
    echo "selisihnya adalah : $f";
    
  } else {
    
    if ($w3 == 4) {
      $a = (int) substr((string) $w1, 0, 2);
    } else if ($w3 == 3) {
      $a = (int) substr((string) $w1, 0, 1);
    } 
    if ($w4 == 4) {
      $b = (int) substr((string) $w2, 0, 2);
    }else if ($w4 == 3) {
      $b = (int) substr((string) $w2, 0, 1);
    }
    $c = $w1 % 100;
    $d = $w2 % 100;
    $e = 0; //jamnya
    $f = 0; //menitnya
    
    $g = $a;
    while ($g != $b) {
      $g++;
      $e++;
      if ($g == 24){
        $g = 0;
      }
    }
    
    $h = $c;
    while ($h != $d) {
      $h++;
      $f++;
      if ($h == 60){
        $h = 0;
      }
    }
    
    echo "selisihnya adalah $e jam dan $f menit";
    $i = $e * 60;
    echo " atau ". $i+$f . " menit";
    
  }
  
?>

</body>
</html>