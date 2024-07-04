Básicamente el mismo ejercicio anterior, pero esta vez, debe hacerlo utilizando un procedimiento el
cual toma un tercer argumento y coloca el resultado de la suma en dicho parámetro.

<?php
function suma($nro1, $nro2, &$suma){ // Aqui Nro1 y Nro2 son Parametros
    // El & me permite tener una referencia al lugar donde esta almacenado la variable
    // Sin el & solamente tenemos el valor de esa variable
    $suma = $nro1 + $nro2;
}

$a = readline('Ingrese el n° 1: ');
$b = readline('Ingrese el n° 2: ');

$resultado = 0;
suma($a,$b,$resultado); // $a y $b son argumentos
echo "El resultado de la suma es: $resultado";