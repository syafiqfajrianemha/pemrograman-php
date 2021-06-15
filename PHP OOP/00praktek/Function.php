<?php

require_once "data/Person.php";

$person = new Person("Syafiq", "Purbalingga");
$person->name = "Syafiq";

$person->sayHello("Jennifer");

$person->info();
