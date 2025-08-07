<!DOCTYPE html>
<html>
<body>

<?php
$jk = "p";
$umur = 15;

switch (strtolower($jk)) {
    case 'p':
        $kategori = "pria";
        break;
    case 'w':
        $kategori = "wanita";
        break;
    default:
        $kategori = null;
}

echo "Karyawan $kategori berumur $umur tahun"

?>

</html>
</body>