<?php
$prixHT = readline("Saisir la prix HT :");
$prixTVA = readline("Saisir la prix TVA en pourcent :");
echo PHP_EOL;
$prixTTC = $prixHT+$prixHT*($prixTVA/100);
$prixTTC=round ($prixTTC,2);
 
echo $prixTTC;