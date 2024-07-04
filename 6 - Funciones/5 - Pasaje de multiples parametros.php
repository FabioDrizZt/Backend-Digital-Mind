<?php

// --------------------------------
// -- PASAJE DE MULTIPLES PARAMETROS
// --------------------------------

function suma($nro1, $nro2, $nro3 = 0)  {
    return $nro1 + $nro2 + $nro3;
}

$a = 3;
$b = 6;
echo "$a + $b = " . suma($a,$b);
echo "\n2 + 4 = " . suma(2,4);
echo "\n2 + 4 + 6 = " . suma(2,4,6);

function sumar(...$nros){
    $suma = 0;
    foreach ($nros as $nro) {
        $suma += $nro; 
    }
    return $suma;
}

echo "\n$a + $b = " . sumar($a,$b);
echo "\n2 + 4 = " . sumar(2,4);
echo "\n2 + 4 + 6 = " . sumar(2,4,6);
echo "\n2 + 4 + 6 + 8 = " . sumar(2,4,6,8);
echo "\n la suma es: " . sumar(1,2,3,4,5,6,7,8,9,10);

function nombrar(...$nombres)
{
    foreach ($nombres as $nombre) {
        echo "Un participante de GH se llama: $nombre" . PHP_EOL;
    }
}

nombrar("Furia","Cata","brian","chino");