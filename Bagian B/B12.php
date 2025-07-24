<!DOCTYPE html>
<html>
<body>

<?php
  
 $jum = 250;
 $kod = "r";
 
 if ($kod == "F" || $kod == "f") {
   if ($jum <= 50 && $jum >= 1){
     $bayar = $jum * 100;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum <= 100 && $jum >= 51) {
     $bayar = $jum * 150;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum >= 100){
     $bayar = $jum * 250;
     echo "Anda perlu membayar : $bayar Rp";
   }
 } else if ($kod == "R" || $kod == "r") {
   if ($jum <= 50 && $jum >= 1){
     $bayar = $jum * 400;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum <= 100 && $jum >= 51){
     $bayar = $jum * 700;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum > 100){
     $bayar = $jum * 1000;
     echo "Anda perlu membayar : $bayar Rp";
   }
 } else if ($kod == "N" || $kod == "n") {
   if ($jum <= 50 && $jum >= 1){
     $bayar = $jum * 750;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum <= 100 && $jum >= 51){
     $bayar = $jum * 1000;
     echo "Anda perlu membayar : $bayar Rp";
   } else if ($jum >= 100){
     $bayar = $jum * 1350;
     echo "Anda perlu membayar : $bayar Rp";
   }
 }
  
?>

</body>
</html>