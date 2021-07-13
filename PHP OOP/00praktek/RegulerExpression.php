<?php

$matches = [];
$result = (bool)preg_match_all("/syafiq/i", "Syafiq Fajrian Emha", $matches);

var_dump($matches);
var_dump($result);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");

var_dump($result);

$result = preg_split("/[\s,-]/", "Syafiq Fajrian Emha,Programmer,Zaman-Now");

var_dump($result);
