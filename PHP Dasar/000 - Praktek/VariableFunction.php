<?php

// function foo()
// {
//     echo "Foo" . PHP_EOL;
// }

// function bar()
// {
//     echo "Bar" . PHP_EOL;
// }

// $functionYangAkanDipanggil = "foo";
// $functionYangAkanDipanggil();   

// $functionYangAkanDipanggil = "bar";
// $functionYangAkanDipanggil();


// Penggunaan Variable Function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Syafiq", "sampleFunction");
sayHello("Syafiq", "strtoupper");
sayHello("Syafiq", "strtolower");
