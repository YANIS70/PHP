<?php
$nombre = readline("Saisir un nombre entre 0 et 1000: ");
$essai = 0;

while ($nombre <0 or $nombre >1000) {
    echo ("Le nombre à deviner doit être compris entre 0 et 1000 ! ");
    echo PHP_EOL;
    $nombre =readline("saisir un nombre correct ");
}
while (random_int(0,1000) != $nombre) {
    $essai +=1;
    if ($essai >= 200) {
        break;
    }
}
if ($essai >= 200) {
    echo "Tu n'as pas deviné en moins de 200 coups !";
}else {
    echo "Le nombre à deviner a été touvé en $essai coups ";
}