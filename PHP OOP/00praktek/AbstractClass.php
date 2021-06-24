<?php

require_once "data/Location.php";

use Data\{Location, City};

// $location = new Location(); ERROR

$location = new City();
$location->name = "Jateng";
echo $location->name;
