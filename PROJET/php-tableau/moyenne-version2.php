<?php
$notes = [10, 12.5, 14, 7, 15, 9.5, 8];
$somme = 0 ;
//$average = round(array_sum($notes)/count($notes),2);
if (count($notes)==0) {
    echo "ce n'ais pas posible"; 
}else{
    for ($i=0; $i< count($notes) ; $i++) {
        $somme = $somme +$notes[$i];
    }
}
$avg = round($somme / count($notes),2);
echo $avg;
 
/*$notes = [10, 12.5, 14, 7, 15, 9.5, 8];
$somme = 0;
if (count($notes)==0) {
    echo "ce n'ais pas posible";
}else{
    for ($i=0; $i< count($notes) ; $i++) {
        $somme = $somme +$notes[$i];
    }
}
$avg = round($somme / count($notes),2);
if ($avg<10) {
    echo "vous n'avez pas votre diplome";
}elseif ($avg<12) {
    echo "mention passable";
}elseif ($avg<14) {
    echo "mention assez bien";
}elseif ($avg <16) {
    echo "mention bien";
}else{
    echo "mention tres bien";
}
*/
