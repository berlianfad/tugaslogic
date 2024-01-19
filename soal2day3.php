<?php
// Waktu sekarang (diisi manual untuk contoh)
$jam_sekarang = 16;
$menit_sekarang = 0;

// Array rentang waktu kerja
$waktu_kerja = [
    ['mulai' => 7, 'selesai' => 11],    
    ['mulai' => 11, 'selesai' => 30],
    ['mulai' => 12, 'selesai' => 16]
];

// Inisialisasi variabel flag
$waktu_kerja_flag = false;

// Cek kondisi waktu kerja menggunakan array
foreach ($waktu_kerja as $rentang) {
    if (
        ($jam_sekarang >= $rentang['mulai'] && $jam_sekarang < $rentang['selesai']) ||
        ($jam_sekarang == $rentang['selesai'] && $menit_sekarang <= $rentang['mulai'])
    ) {
        $waktu_kerja_flag = true;
        break;
    }
}

// Output hasil
if ($waktu_kerja_flag) {
    echo "waktu kerja.";
} else {
    echo "bukan waktu kerja.";
}
?>
