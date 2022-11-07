<?php

$prix = readline("Saisir une prix : ");
if ($prix < 1000) {
    $remiseTaux = 5; 
} elseif ($prix < 5000) {
    $remiseTaux = 10; 
} else {
    $remiseTaux = 20; 
}
$remise = $prix*$remiseTaux/100;
$prixApresRemise = $prix - $remise;
echo "La remise est de $remiseTaux % soit " . number_format($remise,2,","," ") . " euros";
echo PHP_EOL;
echo "Le montant de l'article après remise est de " . number_format($prixApresRemise,2,","," ") . ' euros';
