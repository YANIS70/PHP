<?php
/*
   Ceci est un commentaire multi ligne
*/

// Déclarer une varible contenant un prenom (une valeur)
$prenomUtilisateur = "Yanis";
echo $prenomUtilisateur;
echo PHP_EOL;

// Je modifie la valeur de prenom
$prenomUtilisateur = "Pierre";
echo $prenomUtilisateur;
echo PHP_EOL;

// Contenu, Type de la variable (utilise var_dump($.....))
var_dump($prenomUtilisateur);
echo PHP_EOL;
$prenomUtilisateur = 10;
echo PHP_EOL;
var_dump($prenomUtilisateur);
$prenomUtilisateur = 10.78;
echo PHP_EOL;
var_dump($prenomUtilisateur);
// Types: String=chaîne    Int=entier    float=réel    Bool=booléen



?>