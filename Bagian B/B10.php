<!DOCTYPE html>
<html>
<body>

<?php
  
  $a = 1;
  $b = 4;
  $c = 5;
  
  $d = ($b ** 2) - (4 * $a * $c);
  $B = -abs($b);
  
  if ($d >= 0){
    
    $e = 2 * $a;
    $f = sqrt($d);
    
    $x1 = ($B + $f) / $e;
    $x2 = ($B - $f) / $e;
    
    echo "Akar-akar persamaan ". $a ."x² + ". $b ."x - ". $c ." = 0 adalah: ";
    echo "x1 = ". $x1 ." dan x2 = ". $x2;
    
    
  } else {
    echo "tidak ada solusi real";
  }
  
?>

</body>
</html>