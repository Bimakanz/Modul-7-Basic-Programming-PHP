<?php

echo "OPERATOR RELASI <br>";
echo "<hr>";

$total_belanja = 1000;

echo "<B>Total Belanja Anda $total_belanja <br><br>";

if($total_belanja >= 1000){
    echo"<I>SELAMAT ANDA MENDAPATKAN RAPAKA PEMOTONG RUMPUT 800000000";
} else{
    echo"ANDA TIDAK DAPAT RAPAKA PEMOTONG RUMPUT 8000000 YAAHAHAHA";
}
// AMBATUKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAM
// Senin : Putih Abu
// Selasa : Pramuka
// Rabu : Produktif
// Kamis : Batik
// Jumat : Gamis

echo "<br><br>";

$hari = "Rabu";
if ($hari == "senin") {
    echo"Mengenakan Seragam Putih Abu";
} else if ($hari == "Selasa") {
    echo "Mengenakan Seragam Pramuka";
} else if ($hari == "Rabu") {
    echo "Mengenakan Seragam Produktif";
} else if ($hari == "Kamis") {
    echo "Mengenakan Seragam Batik";
} else if ($hari == "Jumaat") {
    echo "Mengenakan Seragam Gamis";
}
