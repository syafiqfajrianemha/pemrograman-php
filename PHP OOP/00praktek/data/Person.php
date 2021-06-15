<?php

class Person
{
    // constant
    const AUTHOR = "Syafiq Fajrian Emha";

    // properties / attribute
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    // function atau method
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi {$name}, my name is {$this->name}" . PHP_EOL;
        }
    }

    // self keyword
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
