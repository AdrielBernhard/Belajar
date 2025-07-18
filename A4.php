
<!DOCTYPE html>
<html>
<body>

<?php
$s1 = 5;
$s2 = 7;
$s3 = 6;
$T = ($s1+$s2+$s3)/2;
$luas = (sqrt($T*($T-$s1)*($T-$s2)*($T-$s3)));

echo $luas;

?>

</body>
</html>