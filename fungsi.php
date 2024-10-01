<?php

function luasan($alas, $tinggi){
    $hasil = 0.5 * $alas * $tinggi;
    return $hasil;
}

// echo luasan(10, 5);

function sum(...$input){
    $hasil = 0;
    foreach($input as $value){
        $hasil += $value; // ini tuh sama aja dengan $hasil = $hasil + $value;
    }
    return $hasil;
}

// echo sum(1, 2, 3);