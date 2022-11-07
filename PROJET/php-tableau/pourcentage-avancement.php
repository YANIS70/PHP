<?php
//bar de progression
$array = [];

echo "Début du traitement";
echo PHP_EOL;
$i = 0;
for ($i = 0; $i <= 100000; $i++) {
    $array = array_fill($i - 1, $i, "Allo!?");
    echo "En cours\033[31m " . round(($i / 100000) * 100) . "%\r\033[0m";
}

echo "\033[32m " . round(($i / 100000) * 100) . " %       \r\033[0m";
echo PHP_EOL;
echo "Fin du traitement";
echo PHP_EOL;
echo "100000 valeurs ont été traitées !";


