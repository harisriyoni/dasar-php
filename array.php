<?php

$kami = [
    "nama" => ["budi", "andi"],
    "umur" => [17, 18],
];

echo "Nama: " . implode(", ", $kami["nama"]) . "\n"; //show all field index on key nama
echo "Umur: " . implode(", ", $kami["umur"]) . "\n";


$dia = [
    "haris",
    "riyoni",
];

echo "Nama: " . $dia[0] . "\n";
var_dump($dia);

echo $kami["nama"][0];