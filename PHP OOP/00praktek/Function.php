<?php

require_once "data/Person.php";

$person = new Person;
$person->name = "Syafiq";

$person->sayHello("Jennifer");

$person->info();
