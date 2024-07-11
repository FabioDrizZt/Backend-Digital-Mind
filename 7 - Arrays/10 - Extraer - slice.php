<?php

// --------------------------------
// -- array_slice()
// --------------------------------

/*
Extrae una porción de un array.
Parámetros:
1. Requerido: El array del cual deseas extraer la porción.
2. Requerido: La posición de inicio para la extracción (índice).
3. Opcional: La longitud de la porción a extraer.
4. Opcional: Si se establece en true, los índices originales se conservarán. Si se establece en false (por defecto), los índices se reiniciarán.
Retorno: Un nuevo array que contiene la porción extraída del array original.
*/

$frutas = array(
  "manzana",
  "plátano",
  "naranja",
  "fresa",
  "uva",
);

echo "Array original:" . PHP_EOL;
print_r($frutas);

$porcion = array_slice($frutas, 2, 2);
print_r($porcion);

$porcionConIndices = array_slice($frutas, 2, 2, true); // Extraer con los indices originales
print_r($porcionConIndices);