<?php

//echo sprintf("%02d", 3);

$couleurs = [
    "texteFondBlanc" => "\033[0m",
    "texteJaune" => "\033[33m",
    "texteBleu"  => "\033[34m",
];

$Alargeur = readline("Saisir un largeur : ");
$Bhauteur = readline("Saisir une hauteur : ");

function construitTableau2D($hauteur,$largeur): ?array {
    if ($hauteur < 0){
        return null;
    }
    $grille = [];
    for ($i1=0;$i1<=$hauteur;$i1++) {
        $grille[] = [];
        for ($i2=0;$i2<=$largeur;$i2++) {
            $grille[$i1][] = "_";
        }
    }
    return $grille;
}

function afficheTableau2D($grille) {
    if (count($grille) < 0){
        return null;
    }
    global $couleurs;
    $indicePremiereLigne = "    ";
    echo $indicePremiereLigne;
    foreach ($grille[0] as $i1=>$x) {
        echo $couleurs["texteBleu"].sprintf("%02d", $i1).$couleurs["texteFondBlanc"]."  ";
    }
    echo "\n";
    foreach ($grille as $i1=>$y) {
        echo $couleurs["texteBleu"].sprintf("%02d", $i1).$couleurs["texteFondBlanc"]." ";
        foreach ($y as $i2=>$x) {
            echo "| ".$couleurs["texteJaune"]."$x".$couleurs["texteFondBlanc"]." ";

        }
        echo "|\n";

    }
}
//$hauteur = readline("Saisissez une hauteur");
//$largeur = readline("Saisissez une largeur");

$hauteur = $Bhauteur;$largeur = $Alargeur;

$tableau2D = construitTableau2D($hauteur,$largeur);

afficheTableau2D($tableau2D);

//print_r($tableau2D);

/* //Prof :
$grille = [];
$positionVide = '-';

$hauteur = readline("Saisir une hauteur de la grille : ");
$largeur = readline("Saisir un largeur de la grille : ");

for($i=0 ; $i < $hauteur ; $i++) {
    for ($j=0 ; $j > $largeur ; $j++) {
     $grille[$i][$j] = $positionVide;
    }
}



//print_r($grille);




 */