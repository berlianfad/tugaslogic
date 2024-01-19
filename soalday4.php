<!-- fungsi, ubah pukul 19.00 menjadi pukul "07.00 pm" dan ubah pukul 23.45 menjadi pukul 11.45 pm,
pukul 08.55 menjadi pukul "08.55 am" dengan sebuah fungsi yang dibuat sendiri, bukan fungsi date() yang sudah ada -->

<?php
function ubahFormatWaktu($waktu) {
    // Pecah waktu menjadi jam dan menit
    list($jam, $menit) = explode(':', $waktu);

    // Tentukan apakah itu pagi atau malam
    $period = ($jam >= 12) ? 'pm' : 'am';

    // Ubah format 24 jam menjadi 12 jam
    $jam = ($jam > 12) ? $jam - 12 : $jam;

    // Format waktu sesuai dengan kebutuhan
    $formatWaktu = sprintf("%02d.%02d %s", $jam, $menit, $period);

    return $formatWaktu;
}

// Contoh penggunaan
$waktu1 = '19:00';
$waktu2 = '23:45';
$waktu3 = '08:55';

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Waktu asli: $waktu1, Waktu yang diubah: $hasil1\n";
echo "Waktu asli: $waktu2, Waktu yang diubah: $hasil2\n";
echo "Waktu asli: $waktu3, Waktu yang diubah: $hasil3\n";
?>
