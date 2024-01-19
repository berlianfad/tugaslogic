<!-- buatlah perkalian 1 x 1 = 1 sampai dengan 3 x 10 = 30 -->

<?php
$bil1 = [90, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 90, 55, 81, 45, 90, 91, 98];

 $kelompokPertama = array_intersect($bil1, $bil2);

$kelompokKedua = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok Pertama: ";
print_r($kelompokPertama);

echo "Kelompok Kedua: ";
print_r($kelompokKedua);
?>