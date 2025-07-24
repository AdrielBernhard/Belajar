<!DOCTYPE html>
<html>
<body>

<?php
  
 $jum = 1500000;
 
 if ($jum < 100000){
   echo "anda tidak dapat diskon, biaya yang dibayar Rp. $jum";
 } else if ($jum >= 100000 && $jum <= 200000) {
   $diskon = ($jum * 7.5)/100;
   $biaya = $jum - $diskon;
   echo "anda dapat diskon 7.5%, biaya yang dibayar Rp. $biaya";
 } else if ($jum >= 200001 && $jum <= 350000) {
   $diskon = ($jum * 10)/100;
   $biaya = $jum - $diskon;
   echo "anda dapat diskon 10%, biaya yang dibayar Rp. $biaya";
 } else if ($jum > 350000) {
   $diskon = ($jum * 15)/100;
   $biaya = $jum - $diskon;
   echo "anda dapat diskon 15%, biaya yang dibayar Rp. $biaya";
 }
 
?>

</body>
</html>