<?php
if (isset($_POST['proses_data'])) {
    $npm = $_POST['npm'];
    $nilai = $_POST['nilai'];
    $ulangi = $_POST['ulangi'];

    if ($nilai >= 75) {
        $huruf = "A";
    } else if ($nilai >= 65) {
        $huruf = "B";
    } else if ($nilai >= 55) {
        $huruf = "C";
    } else if ($nilai >= 45) {
        $huruf = "D";
    } else {
        $huruf = "E";
    }

    for ($i = 0; $i < $ulangi; $i++) {
        echo $npm . " Nilai Anda " . $nilai . "<br>";
    }
}
?>