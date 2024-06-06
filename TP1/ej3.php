<?php

$a = 33;

$puntoA = ! (( $a > 10 ) && ( $a < 20 ) ) ;
$puntoB = ! (( $a> 10 ) && ! ( $a < 20 ) );

var_dump($puntoA);
var_dump($puntoB);