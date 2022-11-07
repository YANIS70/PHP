<?php
$distance = readline("saisir une distance (en kms) : ")/1000;
$durree = readline ("Saisir la durée : ");

//convertir la durrée en heure
$minutes = substr($durree,-2);
$heure = substr($durree,0,-3);

//calcule de durrée en heure
$durreeHeure = $heure + $minutes/60;
var_dump($durreeHeure);

//calcul de vitesse
$vitesse = ceil($distance / $durreeHeure);
echo "La vitesse moyen du trajet est de $vitesse km/h";


if ($vitesse <=90) {
    echo "vous êtes en dessous des 90km/h";
}else {
    echo "vous êtes au dessus des 90km/h";
}