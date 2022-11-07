<?php

$a = readline("Entrer le coefficient a : ");
$b = readline("Entrer le coefficient b : ");
$c = readline("Entrer le coefficient c : "); 

$delta = $b**2-4*$a*$c;


echo "Résolution de l'équitation $coefa x*2+$coefb x+$coefc=0";
echo PHP_EOL;

if ( $delta < 0 ) {
    echo "Pas de solution";

} elseif ( $delta > 0 ) {
    echo "Il y a 2 solutions";
    echo PHP_EOL;
    $x1 = (-$b-sqrt($delta))/(2*$a) ;
    $x2 = (-$b+sqrt($delta))/(2*$a) ;
    echo  "x1 = $x1";
    echo PHP_EOL;
    echo  "x2 = $x2";
 }
