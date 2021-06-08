<?php

$counter = 1;
while (true) {
    echo $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}
