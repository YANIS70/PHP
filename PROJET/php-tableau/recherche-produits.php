<?php
$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$selectionEquipe = readline("Saisir une équipe : ");
$presence = in_array($selectionEquipe, $equipes);

if ($selectionEquipe == $presence){
    echo "L'équipe sera présente cette année !";
}else{
    echo "L'équipe ne sera pas présente cette année !";
}

//version du prof (Boucle) ;
$trouver = false;
    foreach ($equipes as $equipe) {
        if ($selectionEquipe == $equipe) {
            $trouver = true;
            break;
        }
    }
if ($trouver == true){
    echo "$selectionEquipe est présente !";
}else{
    echo "$selectionEquipe n'est pas présente !";
}

//version du prof (sans boucle, fonction proposé par php)
