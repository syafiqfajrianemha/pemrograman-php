<?php

// lengkapnya di https://www.php.net/manual/en/ref.strings.php 

var_dump(join(",", [10, 11, 12, 13, 14, 15]));
var_dump(explode(" ", "Syafiq Fajrian Emha"));
var_dump(strtolower("SYAFIQ FAJRIAN EMHA"));
var_dump(strtoupper("syafiq fajrian emha"));
var_dump(trim("     Syafiq   Emha    "));
var_dump(substr("Syafiq Fajrian Emha", 0, 6));
