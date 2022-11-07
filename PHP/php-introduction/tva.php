<?php
$prixHT = readline("Saisir la prix HT :");
$prixTVA = readline("Saisir la prix TVA en pourcent :");
echo PHP_EOL;
$prixTTC = $prixHT+$prixHT*($prixTVA/100);
round ($prixTTC,2);
 
echo $prixTTC;