<?php

// --------------------------------
// -- Arrays Asociativos
// --------------------------------

/*

Las claves de un array pueden ser enteros o cadenas.
Si se fija una clave en cualquier punto del array, se considera un array asociativo.

*/

$actores = array(
    // "Clave" => "Valor",
    "Terror" => "Tobin Bell",
    22 => "Adam Sandler",
    "Accion" => ["Tom Cruise", "Jason Statham", "Arnold Schwarzenegger"],
    "Drama" => "Leonardo DiCaprio",
    "Terror" => "Sandra Bullock", // Una clave duplicada sobreescribe el valor anterior
    "Tom Holland", // Un valor sin clave se le es asignado un indice
    "Toby Maguire" // Siempre se continua el último indice existente
);

print_r($actores);