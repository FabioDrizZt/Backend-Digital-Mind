Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un
algoritmo que le permita registrar el tiempo empleado en cada recorrido, al final del proceso el
algoritmo debería mostrar el promedio de los tiempos empleados. También necesita saber cuántas
veces su tiempo fue menor a valor dado y cuál fue su mejor tiempo realizado.

<?php
//Entrada
$tiempoDelRecorrido;
$valorDado;
//Salida
$sumaTiemposRegistrados = 0;
$cantTiemposRegistrados = 0;
$promedio;
$menorTiempo = PHP_INT_MAX;
$contadorMejoresTiempos = 0;
//$primeraVez = true
$valorDado = readline('Ingrese el valor a mejorar: ');

do {
    echo "Ingrese el tiempo del recorrido: ";
    $tiempoDelRecorrido = trim(fgets(STDIN)); // LO MISMO QUE EL READLINE
    $sumaTiemposRegistrados += $tiempoDelRecorrido;
    $cantTiemposRegistrados++;
    // tiempos que mejoran al valor dado:
    if ($tiempoDelRecorrido < $valorDado) {
        $contadorMejoresTiempos++;
    }
    // mejor tiempo realizado
    if ($tiempoDelRecorrido < $menorTiempo){
        $menorTiempo = $tiempoDelRecorrido;
    }
    /* if($primeraVez){
        $menorTiempo = $tiempoDelRecorrido;
    } else if ($tiempoDelRecorrido < $menorTiempo){
        $menorTiempo = $tiempoDelRecorrido;
    }
   } */
    // Preguntas si nos mantenemos en el bucle
    $respuesta = readline('Desea ingresar mas tiempos de recorrido: si / no');
} while ($respuesta == 'si');
$promedio = $sumaTiemposRegistrados / $cantTiemposRegistrados;
echo "El promedio de tiempos recorridos es: $promedio";
// tiempos que mejoran al valor dado:
echo "\nHa superado el valor dado $contadorMejoresTiempos veces";
// mejor tiempo realizado
echo "\nEl mejor tiempo realizado es: $menorTiempo";