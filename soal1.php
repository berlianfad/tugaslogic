<?php
// Tahun ini
$tahun_ini = 2024;

// Usia Andi saat ini
$usia_andi = 16;

// Tahun kelahiran Andi
$tahun_lahir_andi = $tahun_ini - $usia_andi;

// Usia Dani (3 tahun lebih muda dari Beni dan sama dengan Andi)
$usia_dani = $usia_andi + 3;

// Tahun kelahiran Dani
$tahun_lahir_dani = $tahun_ini - $usia_dani;

// Usia Beni (3 tahun lebih tua dari Dani)
$usia_beni = $usia_dani + 3;

// Tahun kelahiran Beni
$tahun_lahir_beni = $tahun_ini - $usia_beni;

// Usia Eko (1 lustrum sebelum Beni)
$usia_eko_sebelum_beni = 5;
$usia_eko = $usia_beni - $usia_eko_sebelum_beni;

// Tahun kelahiran Eko
$tahun_lahir_eko = $tahun_ini - $usia_eko;

// Fungsi untuk menentukan apakah tahun kabisat
function isKabisat($tahun) {
    return ($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0));
}

// Mengecek apakah Andi lahir di tahun kabisat
$lahir_di_tahun_kabisat_andi = isKabisat($tahun_lahir_andi);

// Mengecek apakah Eko lahir di tahun kabisat
$lahir_di_tahun_kabisat_eko = isKabisat($tahun_lahir_eko);

// Menampilkan hasil
echo "Tahun kelahiran Andi:  $tahun_lahir_andi \n";
echo "Tahun kelahiran Dani:  $tahun_lahir_dani \n";
echo "Tahun kelahiran Beni:  $tahun_lahir_beni \n";
echo "Tahun kelahiran Eko:  $tahun_lahir_eko \n";

if ($lahir_di_tahun_kabisat_andi) {
    echo "Andi lahir di tahun kabisat.<br>";
} else {
    echo "Andi tidak lahir di tahun kabisat.<br>";
}

if ($lahir_di_tahun_kabisat_eko) {
    echo "Eko lahir di tahun kabisat.<br>";
} else {
    echo "Eko tidak lahir di tahun kabisat.<br>";
}
?>
