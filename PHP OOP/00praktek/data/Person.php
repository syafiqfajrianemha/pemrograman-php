<?php

class Person
{
    // constant
    const AUTHOR = "Syafiq Fajrian Emha";

    // properties / attribute
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    // constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

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

    // destructor
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
