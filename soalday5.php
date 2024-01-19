<!-- gunakan fungsi untuk menghitung angka 1000 apakah bisa dibagi dengan angka 3,5,7,10. kemudian print "angka 1000 bisa
dibagi dengan angka 5 saja" atau "angka 1000 bisa dibagi dengan angka 5 dan 10" 
sesuaikan dengan hasilnya. (gunakan 2 fungsi, untuk menghitung pembagian, dan cetak hasil, 
pastikan hasil dari pembagian dibuat array, misal [3,7] yaitu angka yang bisa dibagi dengan 1000) -->

<?php

function hitungPembagian($angka)
{
    $hasilPembagian = [];

    if ($angka % 3 == 0) {
        $hasilPembagian[] = 3;
    }

    if ($angka % 5 == 0) {
        $hasilPembagian[] = 5;
    }

    if ($angka % 7 == 0) {
        $hasilPembagian[] = 7;
    }

    if ($angka % 10 == 0) {
        $hasilPembagian[] = 10;
    }

    return $hasilPembagian;
}

function cetakHasil($hasilPembagian)
{
    if (empty($hasilPembagian)) {
        echo "Angka tidak bisa dibagi oleh 3, 5, 7, atau 10.";
    } else {
        $hasilString = "Angka 1000 bisa dibagi dengan angka ";
        $count = count($hasilPembagian);

        for ($i = 0; $i < $count; $i++) {
            $hasilString .= $hasilPembagian[$i];

            if ($i < $count - 1) {
                $hasilString .= ', ';
            }
        }

        if ($count == 1) {
            $hasilString .= ' saja';
        } else {
            $hasilString .= ' dan 10';
        }

        echo $hasilString;
    }
}

$angka = 1000;
$hasilPembagian = hitungPembagian($angka);
cetakHasil($hasilPembagian);

?>
