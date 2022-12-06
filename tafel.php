<?php 
//variables
$tafel=readline("welke tafel wil je zien?");
$begin=1;
$eind=10;

echo "\n\nTafel van $tafel:\n";

//forlus

for ($teller=$begin;$teller<=$eind;$teller++) {
    $product=$teller*$tafel;

 echo $teller. "X" .$tafel. "=" .$product. "\n"; }
?>