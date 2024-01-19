<!-- $bilangan = [75, 77, 87, 70, 90,81, 69, 87, 66];
dari bilangan diatas kelompokkan lah menjadi dua kelompok, yaitu kelompok pertama untuk nilai kompeten yang lebih dari
 dan sama dengan 75, dan kelompok dua belum kompeten yang kurang dari 75 -->

 <?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belumKompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "kelompok pertama (kompeten): " . implode(', ', $kompeten) . "\n";
echo "kelompok kedua (belum kompeten): " . implode(', ', $belumKompeten) . "\n";
?>
