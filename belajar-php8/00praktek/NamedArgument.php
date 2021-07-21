<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello {$first} {$middle} {$last}." . PHP_EOL;
}

// without named argument
sayHello("Syafiq", "Fajrian", "Emha");
// sayHello("Syafiq", "Emha"); // error

// with named argument
sayHello(last: "Emha", first: "Syafiq", middle: "Fajrian");
sayHello(last: "Emha", first: "Syafiq");
