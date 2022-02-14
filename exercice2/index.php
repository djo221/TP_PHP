<?php
$long = 2;
$larg = 4;

//rect( rectangle) | long ( longueur ) | larg ( largeur ) 
function rectangle ( $long, $larg) {

    //périmetre: (longueur + largeur ) * 2
     $perimetre =  ($long +$larg) * 2;
     $aire = $long * $larg;
     // d = racine(longeur² + largeur²)
     $diagonale = sqrt( pow($long,2) + pow($larg,2) );
     
     return "<strong>le perimetre du rectangle est de</strong> $perimetre </br>
     <strong>la surface du rectangle est de</strong> $aire</br>
     <strong>la diagonale du carré est de</strong> $diagonale";
}
echo "<h2>longueur :  $long - largeur : $larg  </h2> <br>";
echo rectangle($long, $larg);

