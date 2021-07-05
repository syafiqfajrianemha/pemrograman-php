<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

MathHelper::$name = "Syafiq";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10);
echo "Hasil : {$result}" . PHP_EOL;
