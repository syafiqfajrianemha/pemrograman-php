<?php

interface HelloWorld
{
    function sayHello(): void;
}

// class SampleHelloWorld implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello Wolrd" . PHP_EOL;
//     }
// }

// menggunakan anonymous class
$helloWorld = new class("Syafiq") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello {$this->name}" . PHP_EOL;
    }
};
$helloWorld->sayHello();
