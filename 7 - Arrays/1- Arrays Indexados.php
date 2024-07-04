<?php

// --------------------------------
// -- Array - Arreglos - Vectores
// --------------------------------

/*
Un array es una colección de valores. Principalmente son datos de tipo clave/valor.

Para configurar un array declaras tu variable y luego le asignamos el array(),
o puedes utilizar la sintaxis de array abreviada que utiliza los corchetes
de apertura y cierre. []

Cualquier array que no defina sus claves es un array indexado.

Cada elemento de un array está separado por una coma.

Los valores pueden ser de cualquier tipo. (cadenas, enteros, booleanos, punto flotante e incluso otros arrays)

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

// var_dump($actores);
// echo "<pre>";
print_r($actores);
// echo "</pre>";

$peliculas = [
    "Titanic",
    "El Naufrago",
    "El club de la pelea",
    "Piratas del Caribe", 
    "Mujer Bonita", 
    "Tomb Raider" // La coma al final es opcional
];

$arrayVariado = [10, 3.14 , "una cadena", true, false, [1,2,3,4], ["a",'b','c','d',"e",'f']];

print_r($arrayVariado);

$frutas = [
    ["manzana", "roja"],
    ["banana","amarilla"],
    ["pera","verde"]
];

echo "La primer fruta es: " . $frutas[0][0] . " Y su color es: " . $frutas[0][1];
echo "La segunda fruta es: " . $frutas[1][0] . " Y su color es: " . $frutas[1][1];