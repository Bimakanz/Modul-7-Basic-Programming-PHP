<?php
echo "<hr>";
echo "<center>OPERATOR ARITMATIKA <br>";
echo "<hr>";
 $Jabatan = 1;
 $waktu = 300;
 

 if ($Jabatan == 1 ) {
    $Jabatan = "Manager";
    $Gaji = 7000000;
 } elseif ($Jabatan == 2) {
    $Jabatan = "Supervisor";
    $Gaji = 500000;
 } elseif ($Jabatan == 3){
    $Jabatan = "Staff";
    $Gaji = 3000000;
 }

 if ($Gaji <= 300000) {
    $pajak = 5;
 } else if ($Gaji >= 300000 && $Gaji <= 500000) {
    $pajak = 10;
 } else if ($Gaji >= 5000000) {
    $pajak = 15; }
    
    $JamBonus = $waktu - 200;

 if ($waktu > 300) {
    $bonus = $JamBonus * 20000;
    $ucapan = "Selamat Anda Rajin Bekerja !!";
 } else {
    $bonus = 0;
    $ucapan = "Jam Kerja Anda Kurang, Yg Rajin Makanyah !!";
 }
 function rupiah ($angka) {
    $hasilRupiah = "Rp " . number_format($angka,2,',','.');
    return $hasilRupiah;
 }


 $persenan = $pajak/100;
 $potongan = $Gaji * $persenan;
 $GajiBersih = $Gaji -$potongan + $bonus;

 echo "Jabatan = " .  $Jabatan . "<br>";
 echo "Gaji Pokok = " . rupiah($Gaji)  . "<br>";
 echo "Pajak = " . rupiah($potongan)  . "<br>";
 echo "Bonus = " . rupiah($bonus)  . "<br>";
 echo $ucapan;
 echo "<br>Gaji Bersih = " . rupiah($GajiBersih) . "<br>";