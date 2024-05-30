<?php

// --------------------------------
// -- Números Enteros - Integer
// --------------------------------

$nroEnteroPositivo = 123; // Esto es una declaracion de variable de tipo entero
$nroEnteroNegativo = -123; // Esto es una declaracion de variable de tipo entero negativo
$nroEnString = "123";

echo $nroEnteroPositivo;
echo PHP_EOL;
echo $nroEnString;
echo PHP_EOL;
var_dump($nroEnString);
var_dump($nroEnteroPositivo);

// rango típico (aprox.)
// -2_147_483_648 a +2147483648 (sistema de 32 bits)
// -9E18 a 9E18 (sistema de 64 bits)

// Si el entero es demasiado largo el compilador lo cambiará automáticamente a reales.
$nroMuyLargo = 2_312_312_315_992_133_222;
var_dump($nroMuyLargo);