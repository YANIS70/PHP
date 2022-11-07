<?php
$phrase =readline("Saisir une phrase :");
$mot =readline("Saisir un mot :");
$countez =substr_count($phrase, $mot);
echo "Le mot ".$mot." apparait ".$countez." fois dans la phrase";