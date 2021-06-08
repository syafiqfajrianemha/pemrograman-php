<?php

$nilai = "E";

// switch ($nilai) {
//     case "A":
//         echo "Anda lulus dengan sangat baik";
//         break;
//     case "B":
//     case "C":
//         echo "Anda lulus";
//         break;
//     case "D":
//         echo "Anda tidak lulus";
//         break;
//     default:
//         echo "Anda salah jurusan";
// }


// Syntax Alternative
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Anda salah jurusan";
endswitch;
