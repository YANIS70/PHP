<?php

function afficheListe($liste) {
    if (count($liste) > 0) {
        foreach ($liste as $elem) {
            echo " $elem";
        }
    }
}

function SiNomDomaineEstValide($adresseEmail,$requeteUtilisateur) {
    $indiceArobase = strpos($adresseEmail,"@");
    $nomDomaine = substr($adresseEmail, $indiceArobase + 1);
    if ($nomDomaine == $requeteUtilisateur) {
        return true;
    }
    return false;
}

$emails =[
    "Yanso"=>"yanso@free.fr",
    "Alexandre"=>"alexandre@gmail.com",
    "Zoé"=>"zoe@laposte.net",
    "Aurore"=>"aurore@free.fr"
];


$requeteUtilisateur = readline("Veuillez choisir un nom de domaine : ");
$listeEmailChoisies = [];

foreach ($emails as $nom => $emailUtilisateur) {
    if (SiNomDomaineEstValide($emailUtilisateur,$requeteUtilisateur)) {
        $listeEmailChoisies[] = $nom;
    };
}

echo "La liste des nom des membres ayant le nom de domaine $requeteUtilisateur dans leurs adresses emails sont";afficheListe($listeEmailChoisies);













