<!-- gunakan fungsi untuk menghitung waktu istirahat, dan waktu kerja pegawai selama jam kerja 8 jam perhari, 
dengan 20 menit jam istirahat shalat dan 30 menit jam istirahat makan -->

<?php

function hitungWaktuKerja($jamKerja, $jamIstirahatShalat, $jamIstirahatMakan)
{
    // Menghitung total waktu istirahat
    $totalIstirahat = $jamIstirahatShalat + $jamIstirahatMakan;

    // Menghitung waktu kerja sebenarnya
    $waktuKerja = $jamKerja - $totalIstirahat;

    return $waktuKerja;
}

// Menetapkan jam kerja, jam istirahat shalat, dan jam istirahat makan
$jamKerjaPerHari = 8;  // Jam kerja per hari
$jamIstirahatShalat = 20 / 60;  // 20 menit dalam jam
$jamIstirahatMakan = 30 / 60;  // 30 menit dalam jam

// Menghitung waktu kerja pegawai
$waktuKerjaPegawai = hitungWaktuKerja($jamKerjaPerHari, $jamIstirahatShalat, $jamIstirahatMakan);

echo "Waktu kerja pegawai per hari adalah: " . $waktuKerjaPegawai . " jam.";

?>
