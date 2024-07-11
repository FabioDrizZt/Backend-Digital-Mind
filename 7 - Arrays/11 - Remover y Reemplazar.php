<?php

// --------------------------------
// -- array_splice()
// --------------------------------

/*
Quita y reemplaza una porción de un array con nuevos elementos.
Parámetros:
1. Requerido: El array en el cual deseas realizar la operación.
2. Requerido: La posición de inicio para la extracción/reemplazo (índice).
3. Opcional: La longitud de la porción a extraer/reemplazar.
4. Opcional: Los elementos con los que deseas reemplazar la porción extraída.
Retorno: Un array que contiene los elementos extraídos.
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

// Extrae todos los elementos desde el indice 2
/* $porcionExtraida = array_splice($frutas, 2);
print_r($frutas);
echo "Porción extraída:" . PHP_EOL;
print_r($porcionExtraida); */

// Con el tercer parametro decimos cuantos elementos vamos a eliminar
/* $porcionExtraida = array_splice($frutas, 2, 1);
print_r($frutas);
echo "Porción extraída:" . PHP_EOL;
print_r($porcionExtraida); */

// Si el tercer parametro es cero no se elimina nada
// En este caso solo agregamos la sandia en el indice 2
/* $porcionExtraida = array_splice($frutas, 2, 0, "sandia");
print_r($frutas);
echo "Porción extraída:" . PHP_EOL;
print_r($porcionExtraida); */

$nuevasFrutas = ["pera",'sandia'];
$porcionExtraida = array_splice($frutas, 2, 2, $nuevasFrutas);
print_r($frutas);
echo "Porción extraída:" . PHP_EOL;
print_r($porcionExtraida);