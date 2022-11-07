<?php
$A = readline("Entrer le coefficient a : ");
$B = readline("Entrer le coefficient b : ");
$C = readline("Entrer le coefficient c : ");

$discriminant = $B**2-4*$A*$C;
$racinediscriminant = sqrt($discriminant);

if($discriminant >0){
    $solution1 = (-$B-$racinediscriminant)/(2*$A);
    $solution2 = (-$B+$racinediscriminant)/(2*$A);
    echo ($solution1);
    echo PHP_EOL;
    echo ($solution2);
}else {
    echo "Discriminant négatif impossible !";
}