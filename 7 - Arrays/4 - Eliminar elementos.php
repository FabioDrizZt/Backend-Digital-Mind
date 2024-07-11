<?php

// --------------------------------
// -- array_pop()
// --------------------------------

/*
Quita y muestra un elemento del final del array.
Parametro:
1. Requerido: array del que se desea eliminar el último elemento. Alterado por referencia (&)
Retorno: Valor del elemento del array.
*/


$actores = array(
    "Leonardo DiCaprio",
    "Tom Hanks",
    "Brad Pitt",
    "Johnny Depp",
    "Sandra Bullock",
    "Angelina Jolie",
    "Tommy Lee Jones",
);

echo "antes: ";
print_r($actores);
$eliminado = array_pop($actores);
echo "\ndespues de eliminar a : $eliminado ";
print_r($actores);

// --------------------------------
// -- array_shift()
// --------------------------------

/*
Quita y muestra el primer elemento del array.
Parámetro:
1. Requerido: array del que se desea eliminar el primer elemento. Alterado por referencia (&)
Retorno: Valor del elemento eliminado del array.
*/

$eliminado = array_shift($actores);
echo "\ndespues de eliminar a : $eliminado ";
print_r($actores);


// --------------------------------
// -- unset()
// --------------------------------

/*
Desactivar/eliminar una variable determinada

Parámetros
1. Obligatorio: variable que desea eliminar/desactivar/borrar
2. Opcional: más variables a eliminar, separadas por una coma.

Retorno: Nada  (void)

 */

$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;

echo "a:$a,b:$b,c:$c,d:$d,e:$e\n";
unset($e);

unset($actores[3], $actores[1]);

echo "\ndespues de eliminar al 3 y al 1 ";
print_r($actores);

$actoresAsociativo = array(
    "terror" => "Tobin Bell",
    "comedia" => "Adam Sandler",
    "accion" => "Vin Diesel",
);

unset($actoresAsociativo["comedia"]);
print_r($actoresAsociativo);