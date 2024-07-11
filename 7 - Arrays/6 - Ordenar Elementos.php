<?php

// --------------------------------
// -- Funciones de Ordenación
// --------------------------------

/*
Las funciones de ordenación en PHP permiten reorganizar los elementos de un array de acuerdo a diferentes criterios.

2. rsort(): Ordena un array en orden descendente por valor.
3. asort(): Ordena un array en orden ascendente por valor, manteniendo la asociación entre clave y valor.
4. arsort(): Ordena un array en orden descendente por valor, manteniendo la asociación entre clave y valor.
5. ksort(): Ordena un array en orden ascendente por clave.
6. krsort(): Ordena un array en orden descendente por clave.
*/
$frutas = array(
    // Clave => Valor
    // Key => Value
    "manzana" => 3,
    "plátano" => 1,
    "naranja" => 2,
    "fresa" => 5,
    "uva" => 4,
);

echo "Array original:" . PHP_EOL;
print_r($frutas);

/* // Ordenar por valor (ascendente)
sort($frutas);
echo "Array ordenado ascendentemente:" . PHP_EOL;
print_r($frutas);
// Ordenar por valor (descendente)
rsort($frutas);
echo "Array ordenado descendentemente:" . PHP_EOL;
print_r($frutas); */

// Ordenar por valor (ascendente)
asort($frutas);
echo "Array ordenado ascendentemente:" . PHP_EOL;
print_r($frutas);
// Ordenar por valor (descendente)
arsort($frutas);
echo "Array ordenado descendentemente:" . PHP_EOL;
print_r($frutas);

// Ordenar por clave (ascendente)
ksort($frutas);
echo "Array ordenado ascendentemente:" . PHP_EOL;
print_r($frutas);
// Ordenar por clave (descendente)
krsort($frutas);
echo "Array ordenado descendentemente:" . PHP_EOL;
print_r($frutas);