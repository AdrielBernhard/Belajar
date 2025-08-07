<!DOCTYPE html>
<html>
<body>

<?php

$x = 90;
$y = "k";

if ($y == "k") {
$K = $x;
$F = $K*3281;
$M = $K*0.6214;

echo "Feets : $F ";
echo "Miles : $M";
} else if ($y == "f") {
$F = $x;
$K = $F/3281;
$M = $K*0.6214;

echo "KM : $K ";
echo "Miles : $M";
} else {
$M = $x;
$K = $M/0.6214;
$F = $K*3281;

echo "KM : $K ";
echo "Feets : $F";
}

?>

</body>
</html>