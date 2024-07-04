Hacer un programa que nos permita introducir un numero por teclado y sobre él se permitan
realizar las siguientes operaciones:

Mostrar la cantidad de divisores
hallar su factorial
comprobar si es primo
imprimir su tabla de multiplicar

<?php

function divisores($numero){
    for ($contador = 0, $i=1; $i <= $numero ; $i++) { 
        if ($numero % $i == 0) $contador++;
    }
    return $contador;
}
function factorial($numero){
    for ($i=$P=1; $i <= $numero ; $i++) { 
        $P *= $i ;
    }
    return $P;}
function esPrimo($numero){
    if ($numero <= 1) return "falso";
    
    $divisores = divisores($numero);
    if ($divisores == 2) return "verdadero";// Porque sus divisores son el 1 y el mismo numero
    
    return "falso";
}
function tabla($numero){
    for ($i=1; $i <= 10; $i++) { 
        echo $numero." x ".$i." = ".($numero*$i)."\n";
    }
}
function menu(&$opcion){
    echo "\n--------- MENU DE OPCIONES ---------";
    echo "\n1: Mostrar la cantidad de divisores";
    echo "\n2: Hallar su factorial";
    echo "\n3: Comprobar si es primo";
    echo "\n4: Imprimir su tabla de multiplicar";
    echo "\n0: Salir.";
    $opcion = readline("\nSeleccione una opcion: \n");
}

// PROGRAMA PRINCIPAL

do {
    $numero = readline("Ingrese un numero: ");
    menu($opcion);
    switch ($opcion) {
        case 1:
            echo "La cantidad de divisores es: ".divisores($numero)."\n";
            break;
        case 2:
            echo "El factorial es: ".factorial($numero)."\n";
            break;
        case 3:
            echo "Es primo: ".esPrimo($numero)."\n";
            break;
        case 4:
            echo "Tabla de multiplicar: ".tabla($numero)."\n";
            break;
        case 0:
            echo "Saliendo...\n";
            break;
        default:
            echo "Opcion invalida, elija otra.";
            break;
    }
} while ($opcion != 0);