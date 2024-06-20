<?php
// --------------------------------
// -- Bucle Do While - Hacer - Mientras que
// --------------------------------

/*

La idea del bucle do while es ejecutar un bloque de código al menos una vez hasta que la expresión haya cambiado.


SIEMPRE EJECUTA EL CODIGO AL MENOS UNA VEZ
do{
    //código
}while(expresión);

En otros lenguajes existe un bucle similar

repeat{
    //código
}until(!expresión);
*/

// $contador = -1;

// do {
//     echo "La cuenta regresiva es: $contador \n";
//     $contador--;
// } while ($contador > 0);

// Sumar varios numeros
$suma = 0;
$contador = 0;
$opcion = 'si';

do {
    $datoIngresado = readline("Ingrese el valor del dato N° ". $contador+1 .": "); 
    $suma += $datoIngresado;
    $contador++;
    $opcion = readline("Desea seguir ingresando datos ?  (si/no): ");} 
while ($opcion == 'si');

echo "la suma de esos $contador numeros es: $suma \n";
echo "El promedio de los valores ingresados es: ". $suma / $contador;