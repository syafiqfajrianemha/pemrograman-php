<?php

class Person
{
    // properties / attribute
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    // function atau method
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}";
        } else {
            echo "Hi {$name}, my name is {$this->name}";
        }
    }
}
