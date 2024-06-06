<?php

// --------------------------------
// -- Declaración de switch - Según
// --------------------------------

/*

Similar a una serie de sentencias if.

switch (expression) {
case 0:
    //code
    break;
case 1:
case 2:
    //code
    break;
default: (opcional)
}

La expresión sólo se evalúa una vez y el resultado se compara con cada una de las sentencias case.
Si coincide, entonces se ejecuta el código hasta el break;

- la sentencia case puede estar vacía
- si no se utiliza la sentencia break, entonces se ejecuta el siguiente bloque de código.

 */

$diaSemana = rand(1,9);
echo "Día ingresado: $diaSemana";
switch ($diaSemana) {
case '1':
    echo "\nLunes";
    break;
case '2':
    echo "\nMartes";
    break;
case '3':
    echo "\nMiercoles";
    break;
case '4':
    echo "\nJueves";
    break;
case '5':
    echo "\nViernes";
    break;
case '6':
    echo "\nSabado";
    break;
case '7':
    echo "\nDomingo";
    break;
default:
    echo "\nIngreso un valor no valido.";
    break;
}
echo "\nFin del programa.";

$nota = rand(0,11);
echo "\nNota ingresada: $nota";

switch($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
        echo "\nSu examen esta reprobado";
        break;
    case 4:
    case 5:
    case 6:
        echo "\nSu examen esta regular";
        break;
    case 7:
    case 8:
    case 9:
        echo "\nSu examen esta promocionado";
        break;
    case 10:
        echo "\nSu examen esta excelente";
        break;
    default:
        echo "Ingreso una nota invalida";
        break;
}