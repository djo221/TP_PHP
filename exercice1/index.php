<?php
 
$num = rand(1, 20);
function  rando($num)  {
   $perimetre = $num * 4;
   $aire = $num * $num;
   // ac² = ad + dc === ac = 2
   $diagonale = $num*sqrt(pow($num, 2)) ;
    return "<strong>le perimetre du carré est de</strong> $perimetre </br>
                <strong>la surface du carré est de</strong> $aire</br>
                <strong>la diagonale du carré est de</strong> $diagonale";
}
 
echo " pour le nombre".$num. "nous aurons les resultats suivants : <br>";
echo rando($num);

