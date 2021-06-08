<?php

// $values = array(10, 9, 8, 7.5);
// var_dump($values);

// Array Numeric
// $names = ["Syafiq", "Fajrian", "Emha"];
// var_dump($names);

// Mengambil data
// var_dump($names[0]);


// Mengubah data
// $names[0] = "Budi";
// var_dump($names);


// Menghapus data
// unset($names[1]);
// var_dump($names);


// Menambah data pada posisi paling belakang
// $names[] = "Paijo";
// var_dump($names);


// Menghitung total data
// var_dump(count($names));


// Array Map / Array Associative
$syafiq = [
    "id" => 1,
    "name" => "Syafiq Fajrian Emha",
    "age" => 17,
    // array di dalam array
    "address" => [
        "city" => "Purbalingga",
        "country" => "Indonesia"
    ]
];

var_dump($syafiq["name"]);
var_dump($syafiq["address"]["city"]);
