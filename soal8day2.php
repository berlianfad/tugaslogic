<?php
$usia_andi = 25; // Usia Andi dalam tahun
$nilai_matematika = 83;
$nilai_bahasa_inggris = 86;
$nilai_bahasa_indonesia = 87;

// Syarat usia
if ($usia_andi >= 16 && $usia_andi <= 25) {
    // Syarat nilai mata pelajaran
    $rata_rata_nilai = ($nilai_matematika + $nilai_bahasa_inggris + $nilai_bahasa_indonesia) / 3;

    if ($nilai_matematika >= 87 && $nilai_bahasa_inggris >= 85 && $nilai_bahasa_indonesia >= 87 && $rata_rata_nilai >= 85) {
        echo "Andi diterima dalam ikatan dinas.";
    } else {
        echo "Andi ditolak dalam ikatan dinas. Nilai mata pelajaran atau rata-rata nilai tidak memenuhi syarat.";
    }
} else {
    echo "Andi ditolak dalam ikatan dinas. Usia tidak memenuhi syarat.";
}
?>
