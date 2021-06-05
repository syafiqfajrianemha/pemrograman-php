<?php

// $sayHello = function (string $name) {
//     echo "Hello $name" . PHP_EOL;
// };

// $sayHello("Syafiq");
// $sayHello("Budi");


// Anonymous Function Sebagai Argument
// function sayGoodBye(string $name, $filter)
// {
//     $finalName = $filter($name);
//     echo "Good Bye $finalName" . PHP_EOL;
// }

// sayGoodBye("Syafiq", function (string $name) {
//     return strtoupper($name);
// });

// $filterFunction = function (string $name) {
//     return strtoupper($name);
// };
// sayGoodBye("Syafiq", $filterFunction);


// Mengakses Variable di Luar Closure/Anonymous Function
$firstName = "Syafiq Fajrian";
$lastName = "Emha";

$sayHeloSyafiq = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHeloSyafiq();
