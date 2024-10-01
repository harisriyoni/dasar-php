<?php

$kami = [
    "nama" => ["budi", "andi"],
    "umur" => [17, 18],
];

foreach($kami as $key => $value){
    foreach($value as $val){
        echo $val;
        echo "\n";
    }
}
?>