<?php

echo "OPERATOR ARITMATIKA <br>";
echo "<hr>";

$bilangan1 = 10;
$bilangan2 = 12;
$bilangan3 = 5;
$bilangan4 = 2;

$HasilPenjumlahan = $bilangan1 + $bilangan2 + $bilangan3 + $bilangan4;
$HasilPerkalian = $bilangan1 * $bilangan2 * $bilangan3 * $bilangan4;
$HasilPembagian = $bilangan1 / $bilangan2 / $bilangan3 / $bilangan4;
$HasilPengurangan = $bilangan1 - $bilangan2 - $bilangan3 - $bilangan4;
$HasilSisaBagi = $bilangan1 % $bilangan2 % $bilangan3 % $bilangan4;
$HasilPangkat = $bilangan1 ** $bilangan2 ** $bilangan3 ** $bilangan4;
$HasilPangkatLagi = $bilangan1 ** $bilangan4;

echo "Hasil Penjumlahan $bilangan1 + $bilangan2 + $bilangan3 + $bilangan4 = " . $HasilPenjumlahan;
echo "<br>Hasil Penjumlahan $bilangan1 X $bilangan2 X $bilangan3 X $bilangan4 = " . $HasilPerkalian;
echo "<br>Hasil Perbagian $bilangan1 : $bilangan2 : $bilangan3 : $bilangan4 =" . $HasilPembagian;
echo "<br>Hasil Pangkat $bilangan1 ^ $bilangan4 =" . $HasilPangkatLagi;