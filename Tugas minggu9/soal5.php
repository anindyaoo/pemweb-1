<?php
$nilai = [80, 90, 75, 85, 100];

$jumlah = 0;
for ($i = 0; $i < count($nilai); $i++) {
  $jumlah += $nilai[$i];
}

$rataRata = $jumlah / count($nilai);

echo "Jumlah total nilai: " . $jumlah . "\n";
echo "Rata-rata nilai: " . $rataRata;
?>