Escriba un programa con una función que tome como parámetro dos enteros, los sume y devuelva
como resultado la suma. El programa deberá pedir al usuario los dos números, luego llamar a la
función con los números leídos como argumentos y por último informar al usuario el valor de la
suma

<?php

function suma($nro1,$nro2){ // Aqui Nro1 y Nro2 son Parametros
    return $nro1 + $nro2;
}

$a = readline('Ingrese el n° 1: ');
$b = readline('Ingrese el n° 2: ');

$resultado = suma($a,$b); // $a y $b son argumentos
echo "El resultado de la suma es: $resultado";