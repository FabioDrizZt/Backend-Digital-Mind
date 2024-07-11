<?php

// --------------------------------
// -- count()
// --------------------------------

/*
Devuelve el número de elementos en un array.
Parametro:
1. Requerido: array para el cual deseas contar los elementos.
2. Opcional: mode (por defecto, COUNT_NORMAL), puedes usar COUNT_RECURSIVE para contar elementos de forma recursiva en arrays multidimensionales.
Retorno: El número de elementos en el array.
*/

$frutas = array(
  "manzana",
  "plátano",
  "naranja",
  "fresa",
  "uva",
);

echo "El número de elementos en el array es: " . count($frutas) . PHP_EOL;