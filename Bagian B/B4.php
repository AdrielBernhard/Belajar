<!DOCTYPE html>
<html>
<body>

<?php
$a = 2;
$b = 5;
$c = 3;

$numb = array($a, $b, $c);
$length = count($numb);

for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($numb[$j] > $numb[$j+1]) {
            // Tukar posisi
            $temp = $numb[$j];
            $numb[$j] = $numb[$j+1];
            $numb[$j+1] = $temp;
        }
    }
}

foreach ($numb as $value) {
    echo $value . " ";
}
?>

</body>
</html>