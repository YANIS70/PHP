<?php

//concatenation = ensemblage (le point c'est ce qu'on appelle l'opperateur de concatenation)*

$prenomUtilisateur = "Yanis";
echo "Bonjour, je m'appelle ".$prenomUtilisateur;
echo PHP_EOL;
$prenomUtilisateur = "Pierre";
echo "Bonjour, je m'appelle ".$prenomUtilisateur;

//je peucx aussi faire comme ça
echo PHP_EOL;
$presentation = "Bonjour, je m'appelle ".$prenomUtilisateur;
echo $presentation;

//l'interpolation = possibilité d'inclure la valeur d'une variable directement dans une chaîne
echo PHP_EOL;
echo "Bonjour, je m'appelle $prenomUtilisateur";
echo PHP_EOL;
echo 'Bonjour, je m\'appelle $prenomUtilisateur';  //un simple cote ' ' l'interpolation ne marche pas 
echo PHP_EOL;

//double concatenation et double interpolation 
$age = 17;
echo "Bonjour, je m'appelle ".$prenomUtilisateur." et j'ai ".$age. " ans"; 
echo PHP_EOL;
echo "Bonjour, je m'appelle $prenomUtilisateur et j'ai $age ans";

