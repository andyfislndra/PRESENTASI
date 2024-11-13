<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
</head>
<body>
    <h1>Hitung Gaji Karyawan</h1>
    <?php
        // Variabel input
        $nama = 'Yofi';
        $jmlHariBekerja = 22;
        $gajiPerHari = 500000;

        // Perhitungan gaji kotor
        $gajiKotor = $gajiPerHari * $jmlHariBekerja;

        // Perhitungan gaji bersih setelah pajak 5%
        $pajak = 0.05 * $gajiKotor;
        $gajiBersih = $gajiKotor - $pajak;

        // Output
        echo '<p>Karyawan bernama <strong>' . $nama . '</strong></p>';
        echo '<p>Gaji kotor (sebelum pajak): Rp ' . number_format($gajiKotor, 0, ',', '.') . '</p>';
        echo '<p>Pajak 5%: Rp ' . number_format($pajak, 0, ',', '.') . '</p>';
        echo '<p>Gaji bersih: <strong>Rp ' . number_format($gajiBersih, 0, ',', '.') . '</strong></p>';
        echo '<p>Setelah bekerja selama ' . $jmlHariBekerja . ' hari dengan gaji per hari sebesar Rp ' . number_format($gajiPerHari, 0, ',', '.') . '</p>';
    ?>
</body>
</html>
