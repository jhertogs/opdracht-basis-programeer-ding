<?php 
//variables & random

$teller=0;
$random=rand(0,100);
$beurt=0;

//vraagt of je wilt starten of wilt stoppen
$input=readline("Wil je starten? druk op druk op enter. En typ [stop] om te stoppen\n");

//stopt de while loop als stop wordt getypt
if($input =="stop") {
        $teller++;
        echo "Je hebt het programma gestopt";
    }

    //de while loop 
while ($teller <1) { 
$beurt++;


    
    //vaagt om getal te raden
$input=readline("raad een nummer tussen 0 en 100\n");

//checked of het antwoord gelijk is aan random 
if($input == $random) { 
    echo "Proficiat je hebt het goed!\n";
    echo "je hebt er: $beurt keer over gedaan\n";
    $teller++;

  }  

//checked of het antwoord kleiner is dan 1 of groter dan 100 en stopt programma als dat het geval is
  if($input < 1 or $input > 100) {
  echo "Geen valide antwoord\n";
  exit("programma stopt\n");
  }

  //checked of het antwoord groter is dan random
if($input > $random) {
    echo "Het antwoort is te groot\n";
    
}

//checked of het antwoord kleiner is dan random
 if ($input < $random) {
    echo "Het antwoord is te klein\n";
    
}
 }
?>