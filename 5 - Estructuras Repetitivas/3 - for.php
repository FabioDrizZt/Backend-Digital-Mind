<?php

// --------------------------------
// -- Bucle For - Para
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional(expresión lógica), que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

 */
$suma_de_multiplicaciones = 1;
for ($i=1; $i <= 10; $i++) { 
    $suma_de_multiplicaciones *= $i;
    echo "el valor de indice es: $i \n";
}
echo "la multiplicacion de los valores entre 1 y 10 es: $suma_de_multiplicaciones";