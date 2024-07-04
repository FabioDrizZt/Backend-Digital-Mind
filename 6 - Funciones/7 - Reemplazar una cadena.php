<?php

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";

$cantidad = 654654654654;

$panteras = str_replace("tigres","panteras",$tigres, $cantidad);

echo $panteras . PHP_EOL;

echo "la palabra tigres se reemplazo $cantidad veces por panteras.";