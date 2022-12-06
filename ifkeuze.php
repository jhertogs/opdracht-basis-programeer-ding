<?php 

$naam=readline("Geef jouw naam:");
$leeftijd=readline("Geef houw leeftijd:");

echo "Hallo $naam \n";

if ($leeftijd < 22) {
    echo "Jij bent jonger dan 22.\n";
}

if ($leeftijd >22) {
    echo "Jij bent jonger dan 22. \n";
}

if ($leeftijd == 22) {
    echo "Jij bent 22. \n";
}
?>