<!DOCTYPE html>
<html>
<body>

<?php
$x = -10;

if ($x < 0) {
    $status = "negatif";
} else if ($x == 0) { 
    $status = "nol";
} else {
    $status = "positif";
}

echo "bilangan ini $status";
?>

</body>
</html>