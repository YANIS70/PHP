<?php
//programme qui demande a user de saisir un nombre et d'afficher si il et paire ou impaire
$nombre1 =readline("saisir un nombre : ");

// le % est un modulo (pâire ou impaire)
if ($nombre1 % 2 == 1){
    echo "impaire";
}else{
    echo "paire";
};