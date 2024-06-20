Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?

<?php
$contador = 0;
$suma = 0;
/* $nota = readline('Ingrese una nota: ');
while ($nota > 0) {
    $suma += $nota;
    $contador++;
    $nota = readline('Ingrese una nota: ');
} */
/* do {
    $nota = readline('Ingrese una nota: ');
    if ($nota > 0){
        $suma += $nota;
        $contador++;
    }
} while ($nota > 0); */
/* for ($nota = readline('Ingrese una nota: '); 
    $nota > 0 ;
    $nota = readline('Ingrese una nota: ')) { 
    $suma += $nota;
    $contador++;
} */
echo "La cantidad de notas ingresadas es: $contador \n";
echo "La suma de notas ingresadas es: $suma \n";
$promedio = $suma / $contador;
echo "El promedio de notas ingresadas es: $promedio \n";