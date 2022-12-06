<?php 
$teller=0;
$random=rand(0,100);
$beurt=0;

while ($teller <1) { 
$input=readline("Wil je starten? druk op druk op een toets. En typ [stop] om te stoppen\n");
if($input =="stop") {
        $teller++;
    }

$input=readline("raad een nummer tussen 0 en 100\n");
  $beurt++;
if($input > $random) {
    echo "Het antwoort is te groot\n";
     
}
 if ($input < $random) {
    echo "Het antwoord is te klein\n";
}


if($input == $random) { 
    echo "Proficiat je hebt het goed!\n";
    echo "je hebt er: $teller2 keer over gedaan\n";
    $teller++;

  }  

  if($input < 1) {
  echo "Geen valide antwoord\n";
  $teller++;
  }

  if($input > 100) {
    echo "Geen valide antwoord\n";
    $teller++;
    }
    
    















 }







?>