<!-- tampilkan lah data dibawah ini yang hanya memiliki diskon 
$barang = [
    [
        'nama'=>'Ban',
        'diskon'=>10,
    ],
    [
        'nama'=>'Oli Mesin',
    ],
    [
        'nama'=>'Kampas Rem',
    ],
    [
        'nama'=>'Busi',
        'diskon'=>9,
    ],
    [
        'nama'=>'Akumulator',
        'diskon'=>7,
    ],
]; -->

<?php
$barang = [
    [
        'nama'=>'Ban',
        'diskon'=>10,
    ],
    [
        'nama'=>'Oli Mesin',
    ],
    [
        'nama'=>'Kampas Rem',
    ],
    [
        'nama'=>'Busi',
        'diskon'=>9,
    ],
    [
        'nama'=>'Akumulator',
        'diskon'=>7,
    ],
];

// Menampilkan data barang yang memiliki diskon
foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo "Nama: " . $item['nama'] . ", Diskon: " . $item['diskon'] . "%<br>";
    }
}
?>
