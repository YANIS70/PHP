<?php
//programme qui demande a user de saisir 2 nombre et d'afficher si c nombre sont egaux ou différent
$nombre1 =readline("Saisir un nombre : ");
$nombre2 =readline("Saisir un nombre : ");
echo PHP_EOL;

$resultat = $nombre1 == $nombre2;
var_dump($resultat);                       //var_dump = le type du truc

if($nombre1==$nombre2){                    //l'operateur == permet de tester l'"galité de 2 valeurs
    echo "les nombres sont egaux";

}else{

    echo "les nombre sont pas egaux !";
};