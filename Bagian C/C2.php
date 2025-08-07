<?php
$x = 10;
$prev1 = 0;
$prev2 = 1;
$current = 0;

echo "0 1 ";

for ($n = 2; $n <= $x; $n++) {
    $current = $prev1 + $prev2;
    echo "$current ";
    
    $prev1 = $prev2;
    $prev2 = $current;
}
?>