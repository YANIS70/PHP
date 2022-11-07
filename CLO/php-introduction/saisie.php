<?php

/*
Demander a l'utilisateur de saisir son prénom 
puis d'afficher la chaîne je m'appelle "prenom saisie"
*/
/*
echo ' enter votre reponse ' ;
$reponse = trim(fgets(STDIN));             //option 1
echo "je m'apppel $reponse";

echo PHP_EOL;

$prenom= readline( ) ;                     //option 2 et la plus simple
echo "je m'apppel $prenom";
echo PHP_EOL;

$prenom = readline("Saisir une valeur :"); //technique officiel
echo "Je m'appelle $prenom";
echo PHP_EOL;
*/
// le prenom doit être afficher en majuscule    commande= strtoupper()    et minuscul c'est strtolower() ==== ça ce fait en concatenation
$prenom = readline("Saisir une valeur :"); 
echo "Je m'appelle ".strtoupper($prenom);          // en majuscule
echo PHP_EOL;
echo "Je m'appelle ".strtolower($prenom);          // en minuscule
echo PHP_EOL;
echo "Je m'appelle ".ucfirst($prenom);             // et ucword pour mettre en majuscule la première lettre de tt les mots d'une chaîne
echo PHP_EOL;
echo "Je m'appelle ".ucfirst(strtolower($prenom)); // ici il y a que la première lettre en majuscule

