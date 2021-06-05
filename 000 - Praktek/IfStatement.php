<?php

$nilai = 70;
$absen = 90;

// if ($nilai >= 80 && $absen >= 80) {
//     echo "Nilai Anda A";
// } else if ($nilai >= 70 && $absen >= 70) {
//     echo "Nilai Anda B";
// } else if ($nilai >= 60 && $absen >= 60) {
//     echo "Nilai Anda C";
// } else if ($nilai >= 50 && $absen >= 50) {
//     echo "Nilai Anda D";
// } else {
//     echo "Nilai Anda E";
// }


// Syantax Alternative
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A";
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B";
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C";
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D";
else :
    echo "Nilai Anda E";
endif;
