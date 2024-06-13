<!-- En un hospital se ha hecho un estudio sobre los pacientes registrados durante los últimos 10 años,
con el objeto de hacer una aproximación de los costos de internación por paciente. Se obtuvo un
costo promedio diario según el tipo de enfermedad que aqueja al paciente. La siguiente tabla
expresa los costos diarios, según el tipo de enfermedad.
Construya un algoritmo que calcule e imprima el costo total que representa un paciente.

Tipo de Enfermedad      Costo/Paciente/Día
1                           125
2                           116
3                           120
4                           132
5                           138 

Datos de entrada: Tipo de enfermedad y Días
Datos de Salida: Costo Total de internación
-->
<?php

// Leemos datos de entrada:
$tipo_enfermedad = rand(1,7);
$dias_internacion = rand(1,10);
// Ver los datos generados aleatoriamente
echo "Datos ingresados: Tipo: $tipo_enfermedad, dias: $dias_internacion \n";

// Validar los datos ingresados:
if($tipo_enfermedad<1 || $tipo_enfermedad>5){
    echo "Error: Tipo de enfermedad no valida.";
} elseif ($dias_internacion<1){
    echo "Error: Días de internación deben ser positivos.";
} else { // Todos los datos correctos
    $costo_diario = match($tipo_enfermedad){
        1 => 125, 2 => 116, 3 => 120, 4 => 132, 5=> 138
    };
    // Calcular el costo total
    $costo_total = $dias_internacion * $costo_diario;
    echo "El costo total de internación es: $costo_total";
}