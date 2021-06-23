<?php

require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Syafiq");
var_dump($company);

$company->programmer = new BackendProgrammer("Syafiq");
var_dump($company);

$company->programmer = new FrontendProgrammer("Syafiq");
var_dump($company);

sayHelloProgrammer(new Programmer("Syafiq"));
sayHelloProgrammer(new BackendProgrammer("Syafiq"));
sayHelloProgrammer(new FrontendProgrammer("Syafiq"));
