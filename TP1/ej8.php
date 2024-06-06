<?php
$A = rand(-5,5);
$B = rand(-5,5);
$C = rand(-5,5);
$D = rand(-10,10);
$E = rand(-10,10);
$F = rand(-10,10);
$G = rand(-10,10);

$puntoA = $A > 0 && $B < 0 ;
echo("A: $A ,B: $B \n");
var_dump($puntoA);

$puntoB = ($A != $B) && ($A != $C) && ($B != $C);
echo("A: $A ,B: $B ,C: $C \n");
var_dump($puntoB);

$puntoC = $E != 0 && !($F>$G);
echo("E: $E ,F: $F ,G: $G \n");
var_dump($puntoC);

$puntoD = (( $A < $B)&&($B < $C)) || (($C < $B)&&($B < $A));
echo("A: $A ,B: $B ,C: $C \n");
var_dump($puntoD);


$puntoE = ($F<0 xor !($E<0));
echo("E: $E ,F: $F \n");
var_dump($puntoE);