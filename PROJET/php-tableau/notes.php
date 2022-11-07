<?php
$tableau= [];
$note = 0;
while ($note !="q") {
    $note =readline("saisir une note (q pour arréter) : ");
    if($note <0 or $note >20){
        echo ("La note saisie est incorrecte");
        echo PHP_EOL;
    }    else{
        $tableau[]=$note;
    }

}
if(count($tableau)==0){
    echo "Aucune note";
}else{
    echo "Vous avez saisie ".count($tableau)." notes.";
    echo PHP_EOL;
    echo "Les notes saisies sont ".implode(" ",$tableau);
    echo PHP_EOL;
    $notesup10 = [];
    foreach ($tableau as $note){
        if($note >=10){
            $notesup10[]= $note;
        }
    }
    if (count($notesup10)>0){
        $moyenne = array_sum($notesup10)/count($notesup10);
        echo ("La moyenne des note supérieur ou égal a 10 est de ".$moyenne);
    }else{
        echo "Pas de notes au dessus de 10";
    }

}
/*
//version prof
$notes =[];
$note = readline("Saisir une note (q pour quitter) :");
while ($note !="q"){
    if($note <=0 or $note >=20 ){
    $notes[]=$note;
}else{
        echo ("La note saisie est incorrecte");
    }
    $note = readline("Saisir une note (q pour quitter) :");
}
echo "Le nombre de saisie est ".count($notes);
echo PHP_EOL;
foreach ($notes as $note){
    echo $note."";
}
*/