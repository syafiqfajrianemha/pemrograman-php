<?php

class Person
{
    // properties / attribute
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    // function atau method
    function sayHeloo(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}
