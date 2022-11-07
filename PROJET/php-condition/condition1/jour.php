<?php
$date = date("d/m/Y");
$jour = date("D");
//var_dump($jour);
echo "Aujourd'hui nous somes le $date";
echo PHP_EOL;

if ($jour == "SAT"){
    echo "Je vous souhaite un bon week-end";
} elseif ($jour == "SUN"){
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée";
}