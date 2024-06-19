<?php 
$angka = [1, 2, 3, 4, 5];
$total = 0;

foreach ($angka as $nilai) {
    $total += $nilai;
}

$rata_rata = $total / count($angka);
echo "Rata-rata: " . $rata_rata; 

?>