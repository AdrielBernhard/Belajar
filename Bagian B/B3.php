<!DOCTYPE html>
<html>
<body>

<?php

$a = 2;
$b = 5;
$c = 3;

if ($a.$b > $b.$c) {
	if ($a > $b){
     echo "bilangan 1 paling besar";
    } else {
     echo "bilangan 2 paling besar";
    }
} else {
	if ($b > $c){
     echo "bilangan 2 paling besar";
    } else {
     echo "bilangan 3 paling besar";
    }
}

?>

</body>
</html>