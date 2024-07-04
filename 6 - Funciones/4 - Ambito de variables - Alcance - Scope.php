<?php

// --------------------------------
// -- Ambito de Variable - Alcance - Scope - Locales Y Globales
// --------------------------------

$varGlobal = "Mi variable Global"; // Declaracion de una variable global

function prueba(){
    global $varLocal;
    $varLocal = "Mi variable Local"; // Declaracion de una variable local
    echo "El valor de la variable local desde dentro de la funcion es : $varLocal ";
    echo "\nEl valor de la variable Global desde dentro de la funcion es :" . $GLOBALS["varGlobal"];
}

prueba();
echo "\nEl valor de la variable local desde fuera de la funcion es : $varLocal ";