<?php

// --------------------------------
// -- Pasaje de parámetros
// --------------------------------

/*
Las funciones pueden aceptar parámetros, que son valores que se pasan a la función cuando se llama. Aquí tienes un ejemplo de cómo pasar un parámetro a una función:
 */

 function saludo($nombre){
    echo "Hola $nombre";
}

$name = 'Fabio';
saludo($name);
echo PHP_EOL;
saludo('Pedro');
echo PHP_EOL;
echo rand(50,100);
echo PHP_EOL;
echo rand();