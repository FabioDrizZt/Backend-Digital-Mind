<?php

// Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es 
// par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar. 

// Datos de Entradas --> Resolución --> Datos de Salida
// N --> Resolución: --> "Positivo" "Negativo" "Cero" "Par" "Impar"

// Resolución 
// N=0 --> Cero
// N>0 --> Positivo
// N<0 --> Negativo
// N % 2 = 0 --> Par
// N % 2 != 0 --> impar

// $N = readline('Ingrese un nro');
$N = rand(-3,3);
echo "El valor ingresado es: $N";

//Resoluciòn
if ($N==0) {
   echo "\n El valor es CERO, por lo tanto no es ni negativo ni positivo ni par ni impar.";
} else {
    // Comprobar positividad
    if ($N>0) {
       echo "\n El valor es POSITIVO";
    } elseif ($N<0) {
       echo "\n El valor es NEGATIVO";
    } 
    // Comprobar paridad
    if ($N % 2 == 0) {
        echo "\n El valor es PAR";
    } else {
        echo "\n El valor es IMPAR";
    }
}