<?php 
//variables
$naam=readline("Geef jouw naam:");
$leeftijd=readline("Geef houw leeftijd:");
$getal=21;
echo "Hallo $naam \n";

//if's

if ($leeftijd < $getal) {
    echo "Jij bent jonger dan $getal
.\n";
}

if ($leeftijd >$getal) {
    echo "Jij bent ouder dan $getal
. \n";
}

if ($leeftijd == $getal) {
    echo "Jij bent $getal
. \n";
}
?>