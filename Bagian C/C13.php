<?php
$N = 3;

$nama1 = "Andi";
$tugas1 = 80;
$uts1 = 75;
$uas1 = 85;

$nama2 = "Budi";
$tugas2 = 70;
$uts2 = 65;
$uas2 = 90;

$nama3 = "Citra";
$tugas3 = 90;
$uts3 = 85;
$uas3 = 80;

$nilai_akhir1 = (0.1 * $tugas1) + (0.45 * $uts1) + (0.45 * $uas1);
$nilai_akhir2 = (0.1 * $tugas2) + (0.45 * $uts2) + (0.45 * $uas2);
$nilai_akhir3 = (0.1 * $tugas3) + (0.45 * $uts3) + (0.45 * $uas3);

$total_rata = $nilai_akhir1 + $nilai_akhir2 + $nilai_akhir3;
$rata_rata = $total_rata / $N;

$tertinggi = $nilai_akhir1;
$nama_max = $nama1;

if ($nilai_akhir2 > $tertinggi) {
    $tertinggi = $nilai_akhir2;
    $nama_max = $nama2;
}

if ($nilai_akhir3 > $tertinggi) {
    $tertinggi = $nilai_akhir3;
    $nama_max = $nama3;
}

$terendah = $nilai_akhir1;
$nama_min = $nama1;

if ($nilai_akhir2 < $terendah) {
    $min_nilai = $nilai_akhir2;
    $nama_min = $nama2;
}

if ($nilai_akhir3 < $terendah) {
    $min_nilai = $nilai_akhir3;
    $nama_min = $nama3;
}

echo "$nama1: Nilai Akhir = $nilai_akhir1";
echo "$nama2: Nilai Akhir = $nilai_akhir2";
echo "$nama3: Nilai Akhir = $nilai_akhir2" ;

echo "Rata-rata nilai akhir : $rata_rata";
echo "Nilai tertinggi: $tertinggi (nama: $nama_max)";
echo "Nilai terendah: $terendah (nama: $nama_min)";
?>