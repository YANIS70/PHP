<?php
$prenom =readline("Ton prenom ");
$nom =readline("ton nom stp ");
echo "TES INITIALES sont " . strtoupper(substr($prenom, 0, 1)).strtoupper(substr($nom, 0,1));