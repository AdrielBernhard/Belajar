<!DOCTYPE html>
<html>
<body>

<?php
$x = 90;
$y = "k";

if ($y == "k") {
    $K = $x;
    $F = $K * 3281;
    $M = $K * 0.6214;
} elseif ($y == "f") {
    $F = $x;
    $K = $F / 3281;
    $M = $K * 0.6214;
} else {
    $M = $x;
    $K = $M / 0.6214;
    $F = $K * 3281;
}

echo "KM: " . $K . "<br>";
echo "Feet: " . $F . "<br>";
echo "Miles: " . $M;
?>

</body>
</html>