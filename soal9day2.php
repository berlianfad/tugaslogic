<?php
$berat_badan_beni = 44; 
$tinggi_baden_beni = 148; 

$tinggi_baden_beni_meter = $tinggi_baden_beni / 100;

$imt_beni = $berat_badan_beni / ($tinggi_baden_beni_meter * $tinggi_baden_beni_meter);

if ($imt_beni < 18.5) {
    $kategori_imt = "Berat badan kurang";
} elseif ($imt_beni >= 18.5 && $imt_beni < 22.9) {
    $kategori_imt = "Normal";
} elseif ($imt_beni >= 22.9 && $imt_beni < 24.9) {
    $kategori_imt = "Berat badan lebih";
} else {
    $kategori_imt = "Obesitas";
}

echo "IMT Beni: " . $imt_beni . "<br>";
echo "Kategori IMT Beni: " . $kategori_imt;
?>
