<!--  gunakan fungsi untuk menghitung suku pertama sampai 12 dari rumus a*4+n*3 dengan a = 9 -->

<?php

function hitungSuku($a, $n)
{
    return $a * 4 + $n * 3;
}

// Menetapkan nilai awal a
$a = 9;

// Menghitung suku pertama sampai ke-12
for ($n = 1; $n <= 12; $n++) {
    $suku = hitungSuku($a, $n);
    echo "Suku ke-$n: $suku\n";
}

?>
