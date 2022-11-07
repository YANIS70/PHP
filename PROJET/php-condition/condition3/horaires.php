<?php
$heure = readline("Saisir une heure (H:mm) : ");

if(($heure >="09:00" && $heure<"12:00") or ($heure>="14:00" && $heure<"19:00")){
    echo "Le magasin est ouvert";
}else {
    echo "Le magasin est fermé";
}
