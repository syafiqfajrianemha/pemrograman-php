<?php

// Union
$first = [
    "first_name" => "Syafiq"
];
$last = [
    "last_name" => "Fajrian Emha"
];

$full = $first + $last;
var_dump($full);


// Equality dan Identity
$a = [
    "first_name" => "Syafiq",
    "last_name" => "Fajrian Emha"
];
$b = [
    "last_name" => "Fajrian Emha",
    "first_name" => "Syafiq"
];

var_dump($a == $b);
var_dump($a === $b);
