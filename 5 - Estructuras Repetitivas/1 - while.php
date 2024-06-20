<?php
// --------------------------------
// -- Bucle While 
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión lógica) {
    //código
}
*/
// $indice = 1;
// while ($indice <= 10) {
//     echo "el valor de indice es: $indice \n";
//     $indice++;
// }
// echo "Termino el bucle y el indice vale: $indice";

// Sumar varios numeros
$suma = 0;
// $suma = $suma + 3;
$contador = 0;
$opcion = 'si';
while ($opcion == 'si'){
    $datoIngresado = readline("Ingrese el valor del dato N° ". $contador+1 .": "); 
    $suma += $datoIngresado;
    $contador++;
    $opcion = readline("Desea seguir ingresando datos ?  (si/no): ");
}

echo "la suma de esos $contador numeros es: $suma \n";
echo "El promedio de los valores ingresados es: ". $suma / $contador;