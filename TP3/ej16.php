En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las
tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para
informar en que año la población del país B supera a la de A.

Entrada --> Proceso -->Salida

<?php
$año = 1994;
$poblacionA = 25;
$poblacionB = 19.9;
$crecimientoA = 0.02;
$crecimientoB = 0.03;

// echo "año: $año la poblacion de A tiene $poblacionA habitantes la poblacion de B tiene $poblacionB habitantes";

while ($poblacionB < $poblacionA){
    $año++;
    $poblacionA += $poblacionA*$crecimientoA; //$poblacionA = $poblacionA + $poblacionA*$crecimientoA;
    $poblacionB += $poblacionB*$crecimientoB; //$poblacionB = $poblacionB + $poblacionB*$crecimientoB;
}
echo "\naño: $año la poblacion de A tiene $poblacionA habitantes la poblacion de B tiene $poblacionB habitantes";