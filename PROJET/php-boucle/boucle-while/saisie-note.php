<?php
$note = readline("saisir une note :");
while ($note <0 or $note >20) {
    echo ("La note saisie doit être compris entre 0 et 20 !");
    echo PHP_EOL;
    $note =readline("saisir une note correcte");
}
echo 'La note saisie est correcte !';

