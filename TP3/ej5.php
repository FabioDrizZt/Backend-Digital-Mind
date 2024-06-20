Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente
hasta 2.

<?php

/* N = 20 --> 20 18 16 14 12 10 8 6 4 2 */

$N = rand(20,30);
echo "El valor ingresado es: $N \n";

if ($N % 2 != 0){ // Si es impar, le restamos 1
    $N = $N - 1;    
}
// $N = ($N % 2 != 0) ? $N = $N - 1 : $N;

for ($i=$N; $i >= 2 ; $i-=2) { 
    echo $i . ", ";
}