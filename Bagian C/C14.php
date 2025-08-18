<!DOCTYPE html>
<html>
<body>

<?php
$start = 1;
$end = 500;

echo "Bilangan yang mencintai dirinya sendiri antara $start dan $end:\n";

for ($number = $start; $number <= $end; $number++) {
    $originalNumber = $number;
    $sum = 0;
    $tempNumber = $number;
    
    while ($tempNumber > 0) {
        $digit = $tempNumber % 10;
        $sum += $digit * $digit * $digit;
        $tempNumber = (int)($tempNumber / 10);
    }
    
    if ($sum === $originalNumber) {
        echo $originalNumber . "\n";
    }
}
?>

</body>
</html>