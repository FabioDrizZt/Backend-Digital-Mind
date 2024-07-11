<?php

// --------------------------------
// -- Métodos de Búsqueda y Verificación
// --------------------------------

/*
Los métodos de búsqueda y verificación en PHP te permiten buscar valores o claves en un array y verificar su existencia.

1. in_array($valor, $array, $estricto): Verifica si un valor existe en un array.
2. array_search($valor, $array, $estricto): Busca un valor y devuelve su clave correspondiente en un array.
3. array_key_exists($clave, $array): Verifica si una clave existe en un array asociativo.

*/

$frutas = array("manzana", "plátano", "naranja", "fresa", "uva");
echo "Array original:" . PHP_EOL;
print_r($frutas);

$buscarValor = "fresa";
if(in_array($buscarValor, $frutas)){
    echo "El valor $buscarValor existe en el array." . PHP_EOL;
} else {
    echo "El valor $buscarValor NO existe en el array." . PHP_EOL;
}

$buscarValor = "naranja";
$resultadoBusqueda = array_search($buscarValor, $frutas);
if ($resultadoBusqueda != false){
    echo "El valor $buscarValor existe en el array y su clave es $resultadoBusqueda";
} else {
    echo "El valor $buscarValor NO existe en el array." . PHP_EOL;
}