<!DOCTYPE html>
<html>
<body>

<?php
$x = 10; 

$hasil = "";
if ($x % 2 == 0) {
    $hasil = "genap";
} else {
    $hasil = "ganjil";
}

// --- OUTPUT ---
echo "ini adalah bilangan $hasil"; 
?>

</body>
</html>