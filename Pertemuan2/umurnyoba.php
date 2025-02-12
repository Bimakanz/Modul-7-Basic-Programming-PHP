<?php

// readline digunakan untuk membaca input pengguna
$umur = readline("Masukan Usia Anda :");

if ($umur == 0 ) {
    echo "Usia Bayi";
} elseif ($umur >= 1 && $umur <= 12 ) {
    echo "Usia Anak - Anak";
} elseif ($umur >= 13 && $umur <= 17) {
    echo "Usia Remaja";
} elseif ($umur >= 18 && $umur <= 50) {
    echo "Usia Dewasa";
} elseif ($umur >= 51){
    echo "Usia Tuwir";
} else {
    echo "-";
}