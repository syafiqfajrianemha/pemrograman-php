<?php

require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$age = input("Age");
echo $age . PHP_EOL;
