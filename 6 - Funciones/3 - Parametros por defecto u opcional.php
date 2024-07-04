<?php

// --------------------------------
// -- Parámetros por defecto u opcional
// --------------------------------

/*
Si un parámetro específico no se pasa siempre o si quiere que un
valor por defecto, pero permite las opciones para cambiarlo más tarde en
el programa, puede establecer los parámetros por defecto.
 */

function saludar($nombre = "Invitado") {
    return "¡Hola, $nombre!";
}

echo saludar(); // Salida: ¡Hola, Invitado!

echo PHP_EOL;
$name = 'Fabio';
echo saludar($name);
echo PHP_EOL;
echo saludar('Pedro');