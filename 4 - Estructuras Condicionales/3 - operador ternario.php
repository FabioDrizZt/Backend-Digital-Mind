<?php

// --------------------------------
// -- Ternario
// --------------------------------

/*

(expresión) ? resultado1 : resultado2

La expresión ------ (expresión) ? resultado1 : resultado2 ----- evalúa a resultado1
si la expresión es TRUE, y result2 si la expresión es FALSE.

 */

$edad = rand(15,20); // readline("Ingrese su edad: ");
echo "su edad ingresada es: $edad";

echo ($edad>=18) 
    ? "\n Eres mayor de edad" 
    : "\n Eres menor de edad";

echo "\n Eres ". (($edad>=18) ? "mayor":"menor") ." de edad" ;
    