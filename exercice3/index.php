<?php

/*$num1 = 4;
$num2 = 2;*/

function calculs ( $num1 , $num2){
    
    $somme = $num1 + $num2;
    $expo = exp($somme); 
    $diff = $num1 - $num2;
    $produit = $num1 * $num2;
    $modulo = $num1 % $num2;
    $division = $num1 / $num2;
    $carre = pow( $somme, 2); 

    return "Pour les nombres $num1 et $num2 <br>
    la somme est de $somme <br>
    l'exponentiel est de  $expo <br>
    la différence est de  $diff <br>
    le produit est de $produit <br>
    le modulo est de $modulo <br>
    la division est de $division <br>
    le carré est de  $carre ";
}

echo calculs(10, 5);

