<?php

echo "STUDI KASUS 2 <br>";
echo "<hr>";

$belanja = 1500000;
$status = "Member Gold";

if ($belanja >= 1500000 ) {
    $pajak = 20;
}else if ($belanja >= 1000000 && $belanja <= 1499999) {
    $diskon = 15;
}else if ($belanja >= 1000000 ) {
    $diskon = 10;

}
if($status == "Member Gold") {
    $diskon = $diskon + 5;
}
 else{
    $diskon = $diskon + 0;
}
$persen = $diskon / 100;
$potongan = $belanja * $persen;
$total_bayar = $belanja - $potongan;

echo "Jenis Member : " . $ ;
echo "Total Belanja :" . ;
echo "Diskon :" .;
echo "Potongan" .;
echo "Total Bayar : " .;
