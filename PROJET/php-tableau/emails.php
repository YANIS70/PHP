<?php

$domaine = readline("Saisir un nom de domaine ");

$emails=[
    "Yanso"=>"yanso@free.fr",
    "Alexandre"=>"alexandre@gmail.com",
    "Zoé"=>"zoe@laposte.net",
    "Aurore"=>"aurore@free.fr"];

foreach ($emails as $nom => $emails){
    if (strpos($emails, $domaine)){
        echo"$nom a pour adresse $emails ";
        echo PHP_EOL;
    }
}