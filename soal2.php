<?php

$jumlah_peserta = 121;
$mata_lomba_eko = 'Web App';  // Web App
$tingkat_pendidikan_eko = 'SMK';  // SMA/SMK/MA
$tahun_pelaksanaan = date('y');  // 2 digit terakhir tahun pelaksanaan

// Tentukan kondisi untuk Eko berdasarkan mata lomba yang diikuti
if ($mata_lomba_eko == '01w') {
    $kategori_mata_lomba = '01w';
} elseif ($mata_lomba_eko == '02A') {
    $kategori_mata_lomba = 'Android';
} elseif ($mata_lomba_eko == '03G') {
    $kategori_mata_lomba = 'Game';
} else {
    $kategori_mata_lomba = 'Mata lomba tidak valid';
}

// Tentukan kondisi untuk Eko berdasarkan pendidikan yang diikuti
if ($pendidikan == 'SMK') {
    $kategori_pendidikan_eko = 'SMK';
} elseif ($pendidikan_eko == 'SMK') {
    $kategori_pendidikan = 'SMK';
}

// Generate nomor peserta untuk Eko
if ($kategori_mata_lomba == 'Web App') {
    $nomor_peserta_eko = sprintf('%03d%s%s%s', $jumlah_peserta + 1, $mata_lomba_eko, $tingkat_pendidikan_eko, $tahun_pelaksanaan);
    echo "Nomor peserta Eko untuk mata lomba $kategori_mata_lomba: $nomor_peserta_eko\n";
} else {
    echo "Eko tidak menjadi perwakilan pada mata lomba $kategori_mata_lomba\n";
}

?>