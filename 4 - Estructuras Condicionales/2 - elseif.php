<?php

// --------------------------------
// -- Else If - Si no es verdadera, pero si es verdadera la siguiente, ejecuta el código.
// --------------------------------

/*


Puede tener una comprobación condicional adicional ampliando la sentencia if para incluir el elseif.

Tenga en cuenta que se ejecutará la comprobación condicional que devuelva primero true.

 */

$salario = readline('Ingrese su salario: ');

if ($salario < 234_315.12){
    echo "usted cobra menos del salario minimo";
} elseif ($salario < 500_000 ) {
    echo "Usted cobra dos salarios minimos";
} elseif ($salario < 1_000_000){
    echo "Usted cobra cuatro salarios minimos";
} elseif ($salario < 2_300_000){
    echo "usted cobra bastante bien 10 salarios minimos, pero menos que un diputado";
} elseif ($salario < 8_000_000){
    echo "usted cobra mas que un diputado pero menos que un senador";
} else {
    echo "usted cobra mas que un senador";
}