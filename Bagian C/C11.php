<!DOCTYPE html>
<html>
<body>

    <?php

        $id1 = 220;
        $w1 = 2200;
        $w2 = 1200;
        $w3 = 5000;
        $w4 = 20000;

        $id2 = 120;
        $w5 = 2238;
        $w6 = 40000;
        $w7 = 2500;
        $w8 = 22000;

        $total1 = $w1+$w2+$w3+$w4;
        $commi1 = ($total * 3.45) / 100;
        $total2 = $w5+$w6+$w7+$w8;
        $commi2 = ($tota2 * 3.45) / 100;

        echo "Karyawan $id1 memiliki total penjualan: $total1 Dan komisi $commi1";
        echo "Karyawan $id2 memiliki total penjualan: $total2 Dan komisi $commi2";

    ?>

</body>
</html>