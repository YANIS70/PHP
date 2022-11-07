<?php
$note = readline("saisir une note (entre 0 et 20) : ");

if ($note < 10) {
    echo "vous n'avez pas la moyen !";
} elseif ($note == 10) {
    echo "Vous avez juste la moyenne";
} else {
    echo "BRAVO, vous avez la moyenne";
}