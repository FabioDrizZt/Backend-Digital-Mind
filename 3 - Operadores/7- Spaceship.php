<?php

// --------------------------------
// -- Nave espacial <=>
// --------------------------------

/*

Esto agrupa todas las operaciones <, ==, >.

Es mejor utilizarlo con una sentencia switch (segun).

-1 si A < B
0 si A == B
1 si A > B

 */

echo 7 <=> 19; // -1
echo PHP_EOL;
echo 8 <=> 8 . PHP_EOL; // 0
echo PHP_EOL;
echo 8 <=> 7 . PHP_EOL; // 1