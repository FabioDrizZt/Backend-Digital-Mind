Se ofrece un trabajo que pague un centavo en la primera semana y dobla su salario cada sema-
na, es decir, $0.01 la primera semana; $0.02 la segunda semana; $0.04 la tercera semana;

$(2*n-1)/100 la n-ésima semana. Determine el salario por cada semana y el salario pagado hasta
la fecha por espacio de n semanas.

<?php

$salarioInicial = 0.01;
$sumaSalario = 0;
$cantidadSemanas = readline('Ingrese la cantidad de semanas: ');

for ($i=1; $i <= $cantidadSemanas; $i++) { 
    $salario = (2**($i-1))/100;
    $sumaSalario += $salario;
    echo "\nEn la semana $i el salario es $ $salario, ha acumulado $ $sumaSalario";
}