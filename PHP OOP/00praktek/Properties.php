<?php

require_once __DIR__ . "/data/Person.php";

$person = new Person;
$person->name = "Syafiq";
$person->address = "Jateng";

echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;


$person2 = new Person;
$person2->name = "Budi";
$person2->address = null;

var_dump($person2);

// error -> karena name harus bertype string
// $person2->name = [];
