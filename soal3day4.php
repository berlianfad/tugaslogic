<!-- buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang terdapat di kedua variabel. dan kelompok kedua bilangan yang hanya terdapat disalah satu variabel saja. 
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98]; -->

<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokPertama = array_intersect($bil1, $bil2);

$kelompokKedua = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok Pertama: " . implode(', ', $kelompokPertama) . "\n";
echo "Kelompok Kedua: " . implode(', ', $kelompokKedua) . "\n";
?>