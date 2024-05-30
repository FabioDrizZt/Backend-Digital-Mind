<?php

// --------------------------------
// -- Tipos de Datos Booleanos
// --------------------------------

$valorVerdadero = true; //tiene valor verdadero
$valorFalso = false; // tiene valor falso

// echo $valorVerdadero; // devuelve 1
echo $valorFalso; // devuelve "" o la nada misma

var_dump($valorVerdadero);
var_dump($valorFalso);
$cadenaFalsa = "";
$cadenaVerdadera = "a";
echo "La cadena falsa devuelve: " . (bool)$cadenaFalsa . PHP_EOL;
echo "La cadena verdadera devuelve: " . (bool)$cadenaVerdadera. PHP_EOL;
$intFalso = 0;
$intVerdadero = -1;
echo "El int falsa devuelve: " . (bool)$intFalso. PHP_EOL;
echo "El int verdadero devuelve: " . (bool)$intVerdadero. PHP_EOL;
$floatFalso = 0.000000;
$floatVerdadero = 0.00000001;
echo "El float falsa devuelve: " . (bool)$floatFalso. PHP_EOL;
echo "El float verdadero devuelve: " . (bool)$floatVerdadero. PHP_EOL;