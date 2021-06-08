<?php

// Single Quote
// echo 'Nama : ';
// echo 'Syafiq Fajrian Emha';
// echo "\n";


// Double Quote
// echo "Nama : ";
// echo "Syafiq\t Fajrian\t Emha\n";


// Multiline String
// 1. Heredoc -> bisa parsing variabel
// echo <<<STR
// Ini adalah contoh string yang sangat
// panjang, dan juga gak perlu ngetik ENTER secara
// manual, "bisa quote" juga
// STR;

// 2. Nowdoc -> tidak bisa parsing variabel
echo <<<'TXT'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
TXT;
