<?php

echo "OPERATOR ARITMATIKA <br>";
echo "<hr>";


$bill1 = 50; // int
$bill2 = 18;

$hasil_penjumlahan = $bill1 + $bill2;
$hasil_pengurangan = $bill1 - $bill2;
$hasil_perkalian   = $bill1 * $bill2;
$hasil_pembagian   = $bill1 / $bill2;
$hasil_sisa_bagi   = $bill1 % $bill2;
$hasil_pangkat     = $bill1 ** $bill2;    

echo "<br>Hasil Penjumlahan $bill1 + $bill2 = " . $hasil_penjumlahan;
echo "<br>Hasil Pengurangan $bill1 - $bill2 = " . $hasil_pengurangan;
echo "<br>Hasil Perkalian   $bill1 * $bill2 = " . $hasil_perkalian;
echo "<br>Hasil Pembagian   $bill1 / $bill2 = " . $hasil_pembagian;
echo "<br>Hasil Sisa Bagi   $bill1 % $bill2 = " . $hasil_sisa_bagi;
echo "<br>Hasil Pangkat     $bill1 ** $bill2 =" . $hasil_pangkat;