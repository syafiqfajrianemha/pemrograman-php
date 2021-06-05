<?php

// function sayHello($name = "Anonymous")
// {
//     echo "Hello $name" . PHP_EOL;
// }


// Rekomendasi
// function sayHello($firstName, $lastName = "")
// {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// }
// sayHello("Syafiq");
// sayHello("Budi");
// sayHello("Syafiq", "Emha");


// Type Declaration
// function sum(int $first, int $last)
// {
//     $total = $first + $last;
//     echo "Total $first + $last = $total" . PHP_EOL;
// }
// sum(100, 100);
// sum("100", "100");
// sum(true, false);


// Variable-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$no = [5, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$no);
