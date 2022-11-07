<?php
$emprunt =readline("Saisir le montant d'emprunt : ");
$taux =readline("Saisir le taux d'untéret : ");
$durée =readline("Saisir le temps, la durée de l'emprunt (en année): ");
$taux = $taux/100;
echo PHP_EOL;
$calcul = (($emprunt*$taux)/12)/(1-(1+($taux/12))**(-12*$durée));
echo PHP_EOL;
echo "La mensualité à rembourser est de ". $calcul. "euros !";
$cout = ($calcul*($durée*12))-$emprunt;
echo PHP_EOL;
echo "Le coût de l'emprunt est de ". $cout ."euros";
echo PHP_EOL;