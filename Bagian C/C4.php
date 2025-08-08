<!DOCTYPE html>
<html>
<body>

<?php
// Proses untuk N=5
$N = 5;
$proses1 = 0;
$proses2 = 0;
$proses3 = 0;

$I = 0;
switch ('A') {
    case 'A':
        while ($I >= $N) {
            $proses1++;
            $I++;
        }
        break;
}

$I = 0;
switch ('B') {
    case 'B':
        do {
            $proses2++;
            $I++;
        } while ($I >= $N);
        break;
}

switch ('C') {
    case 'C':
        for ($I = 0; $I >= $N; $I++) {
            $proses3++;
        }
        break;
}

echo "A: $proses1<br>";
echo "B: $proses2<br>";
echo "C: $proses3<br>";

?>

</body>
</html>
