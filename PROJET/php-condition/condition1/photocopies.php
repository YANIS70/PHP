<?php
$NBphotocopies = readline("Saisir le nombre de photocopie : ");

if ($NBphotocopies >10) {
    $prix = (($NBphotocopies-30));
    echo "Le montant correspondant est de 0.30 euros";
}elseif ($NBphotocopies <=30) {
    echo "Le montant correspondant est de 0.25 euros";    
}