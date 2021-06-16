<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "John";
$manager->sayHello("Syafiq");

$vp = new VicePresident();
$vp->name = "Jennifer";
$vp->sayHello("Syafiq");
