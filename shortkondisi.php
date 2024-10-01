<?php

$namahero = "gatot";
$level = 5;


$skill = $level < 4 ? "Hero $namahero belom ada ulti" : "Hero $namahero belom ada ulti";    
$skill2 = $level >= 5 ? "Hero $namahero sudah ada ulti" : "Hero $namahero sudah ada ulti";    

echo $skill . "\n";
echo $skill2;