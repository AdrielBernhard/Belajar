<!DOCTYPE html>
<html>
<body>

<?php

$u = 90;
$k = "DA";

if ($k == "DA") {
$DA = $u;
$RI = $DA*9325;
$RM = $DA*3.85;

echo "Rupiah Indonesia : $RI <br>";
echo "Ringgit Malaysia : $RM";
} else if ($k == "RI") {
$RI = $u;
$DA = $RI/9325;
$RM = $DA*3.85;

echo "Dollar Amerika : $DA <br>";
echo "Ringgit Malaysia : $RM";
} else {
$RM = $u;
$DA = $RI/3.85;
$RI = $DA*9325;

echo "Dollar Amerika : $DA <br>";
echo "Rupiah Indonesia : $RI";
}

?>

</body>
</html>
