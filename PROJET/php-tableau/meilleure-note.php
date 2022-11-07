<?php

 
$notes = [10, 12.5, 14, 7, 15, 9.5, 8] ;
$max = $notes[0];
 
foreach($notes as $note) {
    if ($max < $note) {
        $max = $note;
    }
}
echo $max;

/*


$notes = [10,12.5,14,7,15,9.5,8];
$meilleurs = max($notes);
echo "la meilleur note est $meilleurs !";
*/