Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres algoritmos con cada
estructura repetitiva.

<?php 

/* 
A=2
B=3
A*B = 2*3 = 2+2+2 = 3+3
A+A+A 
B+B
*/
$A = rand(1,100);
$B = rand(1,100);
echo "A: $A , B: $B \n";
$resultado = 0;
// En B poner el valor mas pequeño
if($B > $A){ // Intercambio de variables
    $temp = $A;
    $A = $B;
    $B = $temp;
}
for ($i=0; $i < $B ; $i++) { 
    $resultado += $A;
    echo "$i \n";
}

echo "A*B = $resultado";