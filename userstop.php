<?php 
//variables

$stop="nee";
$teller1=1;

//de while lus

while($stop == "nee") {
    echo "dit is run $teller1\n";
    $stop=readline("wil je stoppen[ja/nee] :");
    $teller1++;
}
?>