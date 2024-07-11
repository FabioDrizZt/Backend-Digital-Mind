<?php

// --------------------------------
// -- array_push()
// --------------------------------

/*

Agregar un elemento al final de un array

Parametros
1. Requerido: Array al que se va a añadir el elemento. Alterado por referencia (&)
2. Requerido: valor que está añadiendo al array

Retorno:
Devuelve la cantidad elementos hay en el array (incluyendo el nuevo añadido).

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
array_push($actores, "Anne Hathaway", "Guillermo Francella");
echo "\ndespues: ";
print_r($actores);

// Metodo Alternativo

$actores[] = "Ricardo Darin";
echo "\ndespues con metodo alternativo: ";
print_r($actores);
$actores[-4] = "Will Smith";
echo "\ndespues agregar a will en  la clave -4: ";
print_r($actores);
$actores[3] = "Elliot Page";
echo "\ndespues de reemplazar al 3 con elliot page: ";
print_r($actores);


/*
- array_push() arrojará una advertencia si el primer argumento no es un array.
- Si se utiliza la opción [] se creará el array y no se emitirá ninguna advertencia.
 */

 // --------------------------------
// -- array_unshift()
// --------------------------------

/*
Agrega un elemento al principio del array.
Parametros
1. Requerido: Array al que se va a añadir el elemento. Alterado por referencia (&)
2. Requerido: valor que está añadiendo al array

Retorno:
Devuelve la cantidad elementos hay en el array (incluyendo el nuevo añadido).
*/
echo "antes: ";
print_r($actores);
array_unshift($actores, "Anya Taylor-Joy");
echo "\ndespues: ";
print_r($actores);