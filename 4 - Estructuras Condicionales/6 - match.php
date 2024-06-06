<?php

$diaSemana = rand(1,9);
echo "Día ingresado: $diaSemana";

$resultado = match ($diaSemana) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "Numero invalido",
};

echo "\nEl día es: $resultado";
echo "\nFin del programa.";

$nota = rand(0,11);

$resultado = match (true) {
    $nota >=0 && $nota <=3 => "Su examen esta reprobado",
    $nota >=4 && $nota <=6 => "Su examen esta regular",
    $nota >=7 && $nota <=9 => "Su examen esta promocionado",
    $nota == 10 => "Su examen esta excelente",
    default => "Ingreso una nota invalida"
};

echo "\nNota ingresada es: $nota : $resultado";