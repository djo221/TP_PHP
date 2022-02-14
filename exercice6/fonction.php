<?php

function equation($a, $b,$c){

    $delta = $b**2 - (4*($a*$c) );
    if ($delta < 0) {
        return    print "l'equation n'a pas de solution ";
    } elseif ($delta == 0 ) {
        $xNul = -($b / 2*$a);
        print "Delta est nul et le resultatest :".$xNul;
        return $resultat = $xNul;
    }else {
        print "la solution est de ";
        return $x1 .  $x2; 
    }
   
}