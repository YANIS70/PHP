<?php
/*/for($nombre=0 ;$nombre<=100 ;$nombre+=1) {
    if ($nombre %2 == 0) {
        echo $nombre . ' ';
    } 
}/*/

$saisie = readline("Saisir un nombre : ");

for($nombre=0 ;$nombre <= $saisie ;$nombre+=1) {
    if ($nombre %2 == 0) {
        echo $nombre . ' ';
    } 
}