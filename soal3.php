<?php
// Panjang dan lebar tanah
$panjangTanah = 13;
$lebarTanah = 9;

// Menghitung luas tanah
$luasTanah = $panjangTanah * $lebarTanah;

// Menentukan tipe rumah berdasarkan luas tanah
if ($luasTanah < 90) {
    $tipeRumah = "Tipe 36";
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = "Tipe 45";
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = "Tipe 54";
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = "Tipe 60";
} else {
    $tipeRumah = "Tipe 70";
}

// Menampilkan tipe rumah yang dapat dibangun oleh Dani
echo "Dengan luas tanah $luasTanah m2, Dani dapat membangun rumah dengan tipe: $tipeRumah";
?>
