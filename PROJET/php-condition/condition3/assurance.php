<?php
$age = readline("Saisir votre âge : ");
$sexe = readline("Quel est ton genre ? ");
$genre = strtoupper(substr($sexe, 0, 1));

$estHommePlus22ans = $age > 22 && $sexe =='M';
$estFemmmeEntre20et30ans = $age>=20 && $age<=30 && $sexe =='F';            //des conditions

if ($estHommePlus22ans || $estFemmmeEntre20et30ans){
    echo "Vous pouvez toucher la surprime";
}else {
    echo "ta pas de surprime";
}