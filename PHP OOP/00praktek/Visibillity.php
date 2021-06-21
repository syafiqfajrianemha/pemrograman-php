<?php

require_once 'data/Product.php';

$prduct = new Product("Apple", 10000);

echo $prduct->getName() . PHP_EOL;
echo $prduct->getPrice() . PHP_EOL;

$dumy = new ProductDumy("Dummy", 1000);
$dumy->info();
