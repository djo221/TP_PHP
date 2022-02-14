<?php 
/*
p1(1,2) , p2(4,6)
*/
function point($x1,$y1 , $x2 , $y2)
{
     return sqrt( pow (($x2 -$x1), 2)  + pow ( ($y2 -$y1), 2) );
}

$sommePoint = point( 10 , 10, 20, 20 );
 echo "La distance entre les deux points est de ".$sommePoint ;