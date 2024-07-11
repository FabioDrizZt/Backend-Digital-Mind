<?php
// --------------------------------
// -- Bucle Foreach
// --------------------------------

/*
El bucle foreach es una forma sencilla de recorrer los valores de un array asociativo
 */

$actores = array(
    "Leonardo DiCaprio", //0
    "Tom Hanks", //1
    "Brad Pitt", //2
    "Johnny Depp", //3
    "Sandra Bullock", //4
    "Angelina Jolie", //5
    "Tommy Lee Jones", //6
);
$actores[] = "Anya Taylor-Joy";
$actores[] = "Mia Goth";

// No nos funciona en arreglos asociativos
/* for ($i=0; $i < count($actores) ; $i++) { 
    echo "En la posicion $i esta $actores[$i] \n";
} */

foreach ($actores as $actor) {
    echo "$actor \n";
}

foreach ($actores as $indice => $actor) {
    echo "En la posicion $indice esta $actor \n";
}

$actoresAsociativos = array(
    "terror" => "Tobin Bell",
    "comedia" => "Adam Sandler",
    "accion" => "Vin Diesel",
);

foreach ($actoresAsociativos as $actor) {
    echo "$actor \n";
}

foreach ($actoresAsociativos as $genero => $actor) {
    echo "En $genero esta $actor \n";
}