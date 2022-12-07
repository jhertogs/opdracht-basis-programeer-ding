<?php 

//variables & random
$teller=0;
$random=rand(0,100);
$beurt=0;


//de while loop (vraagt of je wilt starten)
while ($teller <1) { 
$input=readline("Wil je starten? druk op druk op een toets. En typ [stop] om te stoppen\n");
$beurt++;

//stopt de while loop als e stop wordt getypt
if($input =="stop") {
        $teller++;
    }

    //vaagt om getal te raden
$input=readline("raad een nummer tussen 0 en 100\n");
  

  //checked of het antwoord groter is dan random
if($input > $random) {
    echo "Het antwoort is te groot\n";
    
}
//checked of het antwoord kleiner is dan random
 if ($input < $random) {
    echo "Het antwoord is te klein\n";
    
}

//checked of het antwoord gelijk is aan random 
if($input == $random) { 
    echo "Proficiat je hebt het goed!\n";
    echo "je hebt er: $beurt keer over gedaan\n";
    $teller++;

  }  
//checked of het antwoord kleiner is dan 1 en stopt programma als dat het geval is
  if($input < 1) {
  echo "Geen valide antwoord\n";
  $teller++;
  }
  
//checked of het antwoord groter is dan 100 en stopt programma als dat het geval is
  if($input > 100) {
    echo "Geen valide antwoord";
    $teller++;
    }
    
    















 }







?>