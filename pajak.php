<?php
echo "OPERATOR PAJAK <br>";
echo "<hr>";

$gaji1 =12000000;
$status = "Tetap";


if ($gaji1 >= 15000000) {
    $pajak = 20;
}else if ($gaji1 >= 10000000 && $gaji1 <= 15000000) {
    $pajak = 20;
}else if ($gaji1 >= 5000000 && $gaji1 <= 10000000) {
    $pajak = 10;
}else if ($gaji1 < 5000000 ) {
    $pajak = 5;
}

if($status == "Tetap"){
    $pajak = $pajak + 5;
} else{
    $pajak = $pajak + 0;
}
$persen = $pajak / 100;
$potongan_pajak = $gaji1 * $persen;
$gaji_bersih = $gaji1 - $potongan_pajak;


echo "Gaji Bulanan : " . "Rp. " . $gaji1;
echo "<br> Status Pegawai : " . " Tetap Pajak : " . $pajak . "%";
echo "<br>Potongan Pajak : " . "Rp. " . $potongan_pajak;
echo "<br>Gaji Bersih  : " . "Rp. " . $gaji_bersih;

// BAGIAN 1 SELESAI
