<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Syafiq", "strtoupper");
sayHello("Syafiq", "strtolower");
sayHello("Syafiq", function (string $name): string {
    return strtoupper($name);
});
sayHello('Syafiq', fn ($name) => strtoupper($name));
