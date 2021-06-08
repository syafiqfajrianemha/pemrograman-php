<?php

// Global Scope
// $name = "Syafiq"; // global scope
// function sayHello()
// {
//     global $name; // global keyword
//     echo $name . PHP_EOL;

//     echo $GLOBALS["name"];
// }
// sayHello();


// Local Scope
// function createName()
// {
//     $name = "Syafiq"; // local scope
// }
// createName();
// echo $name;


// Static Scope
function increment()
{
    static $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
