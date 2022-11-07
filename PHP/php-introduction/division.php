<?php
$nombre1 = readline("Saisir une valeur :");
$nombre2 = readline("Saisir une valeur :");
$nombre3 = $nombre1/$nombre2;
echo PHP_EOL;
round($nombre3,2);
echo "La division de ".$nombre1." par ".$nombre2." est égale a ".$nombre3;
