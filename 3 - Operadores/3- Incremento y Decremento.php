<?php

// --------------------------------
// -- Operadores de incremento y decremento ~ ++, --
// --------------------------------

/*
Aumentar (++) o disminuir (--) un valor en 1
 */

 $incrementadora = 10;
 // Pre Incremento el ++ se ejecuta antes de la función echo
 echo ++$incrementadora . PHP_EOL; // 11
 // Post Incremento el ++ se ejecuta luego de la función echo
 echo $incrementadora++ . PHP_EOL; // 11
 // No hacemos nada  y mostramos la variable
 echo $incrementadora . PHP_EOL; // 12

$decrementadora = 10;
// Pre Decremento el -- se ejecuta antes de la función echo
echo --$decrementadora . PHP_EOL; // 9
// Post Decremento el -- se ejecuta luego de la función echo
echo $decrementadora-- . PHP_EOL; // muestra 9 pero el valor de la variable es 8
// No hacemos nada  y mostramos la variable
echo $decrementadora . PHP_EOL; // 8