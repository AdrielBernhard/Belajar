<!DOCTYPE html>
<html>
<body>

<?php
$jk = "p";
$umur = 15;

echo match(strtolower($jk)) {
    'p' => "karyawan pria yang berumur $umur tahun",
    'w' => "karyawan wanita yang berumur $umur tahun",
    default => "Gender tidak dikenali"
};
?>

</html>
</body>