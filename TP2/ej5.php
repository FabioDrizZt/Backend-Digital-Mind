<!-- Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo
nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000 -->

<?php

/* Datos de entrada: Día, mes y año */
/* Datos de salida: Enero, Febrero, Marzo, etc... , Noviembre, Diciembre */

$dia = rand(1,31);
$mes = rand(1,12);
$año = rand(2000,2025);

echo "Datos ingresados : $dia-$mes-$año \n";

// Validamos mes
if($mes < 1 || $mes > 12) { // !($mes<1 || $mes>12)
    echo "Error: El mes debe estar entre 1 y 12";    
} elseif($dia < 1 || $dia > 31) { // Validamos dia
    echo "Error: El dia debe estar entre 1 y 31";        
} elseif($año <= 2000){ // Validamos año
    echo "Error el año debe ser mayor a 2000";
}else{
    $mesNombre = match($mes) {
        1 => "Enero", 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
        5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
        9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre',
        default => 'desconocido' // No deberia ocurrir.
    };
    // Mostrar la fecha en el formato solicitado
    echo "$dia-$mesNombre-$año";
}
    