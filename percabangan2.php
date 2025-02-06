<?php

$uts = 70;
$uas = 80;
$tugas = 90 ;
$status = ""; // Lulus atau di luluskan 
$grade = ""; // a, b, c

$rata = ($uts + $uas + $tugas) /3;

if ($rata >= 70 && $rata <= 79) {
    $status = "Perbaikan";
    $grade = "C";
}elseif ($rata >= 80 && $rata <= 89) {
    $status = "Lulus";
    $grade = "B";
}elseif ($rata >= 90 && $rata <= 100) {
    $status ="Lulus";
    $grade ="A";
}else {
    $status="-";
    $grade="-";
}

//menampilkan hasil

echo "Nilai UTS =" . $uts;
echo "<br>Nilai UAS =" . $uas;
echo "<br>Nilai Tugas =" . $tugas . "<br>";

echo "Rata - Rata Kamu =" . $rata . "<br>";
echo "Grade Kamu =" . $grade . "<br>";
echo "Status Kamu =" . $status . "<br>";