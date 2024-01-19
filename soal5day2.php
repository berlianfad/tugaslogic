<?php
$harga_belanja = 154000;
$minimal_pembelian = 100000;
$diskon_percent = 7;
if ($harga_belanja >= $minimal_pembelian) {
    $diskon = ($diskon_percent / 100) * $harga_belanja;
    $harga_sesudah_diskon = $harga_belanja - $diskon;
    echo "Harga yang harus dibayar andi jika diskon 7% adalah rp. " . number_format($harga_sesudah_diskon, 0, ',', '.');
} else {
    echo "Harga yang harus dibayar oleh Andi tidak diskon adalah rp. " . number_format($harga_belanja, 0, ',', '.');
}
?>
