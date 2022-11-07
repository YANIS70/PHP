<?php
$notes = [10,12.5,14,7,15,9.5,8];
$total=0;
foreach ($notes as $note) {
    $total=$total+$note;
}
//test si les notes egal 0
if ($notes == 0) {
    echo "Erreur car ta pas de note ";
}

$moyenne=$total/count($notes);


if ($moyenne<10){
    echo "Vous avez eu $moyenne de moyenne";
    echo PHP_EOL;
    echo "Vous n'avez pas votre diplôme";
}elseif ($moyenne>=10 and $moyenne<12) {
    echo "Vous avez eu $moyenne de moyenne";
    echo PHP_EOL;
    echo "Mention passable";
}elseif ($moyenne>=12 and $moyenne<14) {
    echo "Vous avez eu $moyenne de moyenne";
    echo PHP_EOL;
    echo "Mention assez bien";
}elseif ($moyenne>=14 and $moyenne<16) {
    echo "Vous avez eu $moyenne de moyenne";
    echo PHP_EOL;
    echo "Mention bien";
}else {
    echo "Vous avez eu $moyenne de moyenne";
    echo PHP_EOL;
    echo "Mention très bien";
}
/*
if (count($notes)> 0) {
    $moyenne = array_sum($notes)/ count($notes);
}
*/