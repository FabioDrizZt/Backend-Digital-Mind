Hacer un módulo denominado Fact que tiene un parámetro X de tipo entero, en el cuál recibe un
valor entero positivo y devuelve P que es la productoria de X.

<?php

function Fact($X){
    $P = 1;
    for ($i=1; $i <= $X ; $i++) { 
        $P *= $i ;// $P = $P * $i;
    }
    return $P;
}

echo "\nEl factorial de 5 es: ", Fact(5);
$N = readline("Ingrese el factorial a calcular: ");
echo "\nEl factorial de $N es: ", Fact($N);