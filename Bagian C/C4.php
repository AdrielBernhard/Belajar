<!DOCTYPE html>
<html>
<body>

<?php
// Proses untuk N=5
$N = 5;
$I = 0;
$proses = 0;

echo "Proses untuk N=5:<br>";

// A (While)
$I = 0;
$proses = 0;
switch ('A') {
    case 'A':
        while ($I >= $N) {
            $proses++;
            $I++;
        }
        break;
}
echo "A: $proses<br>";

// B (Do-While)
$I = 0;
$proses = 0;
switch ('B') {
    case 'B':
        do {
            $proses++;
            $I++;
        } while ($I >= $N);
        break;
}
echo "B: $proses<br>";

// C (For)
$proses = 0;
switch ('C') {
    case 'C':
        for ($I = 0; $I >= $N; $I++) {
            $proses++;
        }
        break;
}
echo "C: $proses<br>";

// Proses diatur n=3 kali
$n = 3;
echo "<br>Proses diatur 3 kali:<br>";

// A
$I = 0;
$proses = 0;
switch ('A') {
    case 'A':
        while ($I < $n) {
            $proses++;
            $I++;
        }
        break;
}
echo "A: $proses<br>";

// B
$I = 0;
$proses = 0;
switch ('B') {
    case 'B':
        do {
            $proses++;
            $I++;
        } while ($I < $n);
        break;
}
echo "B: $proses<br>";

// C
$proses = 0;
switch ('C') {
    case 'C':
        for ($I = 0; $I < $n; $I++) {
            $proses++;
        }
        break;
}
echo "C: $proses<br>";
?>

</body>
</html>
