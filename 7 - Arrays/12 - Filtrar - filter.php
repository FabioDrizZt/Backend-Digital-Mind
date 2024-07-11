<?php

// --------------------------------
// -- array_filter()
// --------------------------------

/*
Filtra elementos de un array utilizando una función de devolución de llamada.
Parámetros:
1. Requerido: El array que se va a filtrar.
2. Opcional: Una función de devolución de llamada que define el criterio de filtrado.
Retorno: Un nuevo array con los elementos que pasan el criterio de la función de devolución de llamada.
*/

function esPar($nro){
    return ($nro % 2 == 0);
/*  if ($nro % 2 == 0){
        return true;
    } else {
        return false;
    } */
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Array original: ";
print_r($numeros);

// Filtrar los numeros pares
$numerosPares = array_filter($numeros, "esPar");
print_r($numerosPares);