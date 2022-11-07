<?php
$date = date("d/m/Y");
$heure = date("H\hi");

echo ("Nous sommes le : ".$date);
echo PHP_EOL;
echo ("Il est : ".$heure);
echo PHP_EOL;

if (date ('H') < 13){
    echo ("je vous souhaite une bonne matiné");
}else{
    echo ("je vous souhaite un bonne après midi");
}