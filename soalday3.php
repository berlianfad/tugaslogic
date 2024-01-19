<!-- soal menghitung panjang sisi persegi dgn luas 25cm -->

<?php
$luas_target = 25;
$panjang_sisi = 1;

while ($panjang_sisi * $panjang_sisi != $luas_target) {
    $panjang_sisi++;

    if ($panjang_sisi > ($luas_target / 2)) {
        echo "Tidak dapat menemukan panjang sisi yang sesuai untuk luas $luas_target cm^2.";
        break;
    }
}

echo "Luas: $luas_target cm^2 <br>";
echo "Panjang Sisi: $panjang_sisi cm";
?>
