<?php

// --------------------------------
// -- Cambio de Mayusculas - strToUpper - strToLower
// --------------------------------

/*
Cambia todos los caracteres a mayúsculas o a minúsculas
Estas funciones toman cada una un parámetro.

1. Cadena a la que se le cambiarán las mayúsculas y minúsculas.
 */

$tigres = "tres tRiStes tIgrEs, traGabAn trIgO en un trIgal, en tRes triStes trastos, tragaban trigo tres tristes tigres.";
//         012345678901234567890123456789
//                   1         2
$tigresAMayusculas = strToUpper($tigres) . PHP_EOL;
echo $tigresAMayusculas;
$tigresAMinusculas = strToLower($tigres) . PHP_EOL;
echo $tigresAMinusculas;
$tigresConPrimerLetraEnMayuscula = ucfirst($tigresAMinusculas);
echo $tigresConPrimerLetraEnMayuscula . PHP_EOL;
$tigresConPrimerLetraDeCadaPalabraEnMayuscula = ucwords($tigresAMinusculas);
echo $tigresConPrimerLetraDeCadaPalabraEnMayuscula . PHP_EOL;
$tigres[21] = strToUpper($tigres[21]);