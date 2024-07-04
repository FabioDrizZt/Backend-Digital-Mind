Crea una función MayorDeTres, que reciba tres números enteros y devuelva el valor del mayor de
ellos. Por ejemplo, para los números 5, 7 y 5, devolvería el valor

<?php 

function MayorDeTres($a,$b,$c){
    if($a>$b && $a>$c) return $a;
    if($b>$a && $b>$c) return $b;
    if($c>$a && $c>$b) return $c;
    return null;
//     return  ($a > $b && $a > $c) ? $a : (($b > $a && $b > $c) ? $b : $c);
}
$nro1 = rand(1, 100);
$nro2 = rand(1, 100);
$nro3 = rand(1, 100);
echo "El mayor de $nro1,$nro2,$nro3 es: ", MayorDeTres($nro1,$nro2,$nro3);