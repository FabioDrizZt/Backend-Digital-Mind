Diseñar un algoritmo que ordene tres números A, B, C en forma ascendente utilizando un
procedimiento denominado menorMayor que tiene dos parámetros pasados por referencia que
devuelve en el primer parámetro el valor menor y en el segundo el valor mayor de los parámetros
respectivamente.

<?php
// 1 3 2
function menorMayor(&$menor, &$mayor){
    if($menor > $mayor){
        $aux = $mayor;
        $mayor = $menor;
        $menor = $aux;
    }
}

function ordenar3(&$menor, &$medio, &$mayor){
    menorMayor($menor,$mayor);
    menorMayor($medio,$mayor);
    menorMayor($menor,$medio);
}

$nro1 = rand(1,10);/* readline("Ingrese el valor n°1 : "); */
$nro2 = rand(1,10);/* readline("Ingrese el valor n°2 : "); */
$nro3 = rand(1,10);/* readline("Ingrese el valor n°3 : "); */
ordenar3($nro1, $nro2, $nro3);
echo "El menor es : $nro1 el del medio es: $nro2 y el mayor es: $nro3" ;