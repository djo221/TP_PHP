<?php

function permute(int $num1 , int $num2 )
{
    print "<strong>Pour les nombres nombre1 :  $num1  et nombre2 : $num2 <br>";

    $perm = 0;
    $perm = $num1;
    $num1 = $num2;
    $num2 = $perm;

   return "après permutation on aura<br>
                 nombre1 est : $num1 et nombre2 est : $num2  ";
}

echo permute(12, 33);

