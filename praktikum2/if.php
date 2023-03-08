<?php
$total_nilai = 90;
$status;


if ($total_nilai >= 60) {
    echo $total_nilai . " LULUS";
} else {
    echo "Tidak";
}


echo "<br>";
//if

if ($total_nilai >= 85) {
    $status = "A";
} elseif ($total_nilai >= 60) {
    $status = "B";
} elseif ($total_nilai >= 50) {
    $status = "C";
} elseif ($total_nilai >= 30) {
    $status = "D";
} else {
    $status = "D";
}
echo $status;

echo "<br>";