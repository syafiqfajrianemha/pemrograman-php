<?php

$array = [
    "firstname" => "Syafiq Fajrian",
    "lastname" => "Emha"
];

$object = (object)$array;

var_dump($object);

echo "First Name : {$object->firstname}" . PHP_EOL;
echo "Last Name : {$object->lastname}" . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Syafiq Fajrian Emha", "Jateng");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);
