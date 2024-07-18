<?php

// --------------------------------
// -- Acceso a las propiedades
// --------------------------------

/*
Usando el objeto que hemos creado podemos acceder a las propiedades individuales
utilizando el -> (operador de objeto) seguido del nombre de la propiedad (sin $).
Podemos anular el valor dentro de la propiedad tratándola como una
y estableciendo el nuevo valor.
La próxima vez que accedamos a ella... se utilizará el nuevo valor.
*/

class Persona
{
    public $nombre = "Leonardo";
    public $apellido = "Di Caprio";
    public $altura;
    public $genero;
    public $edad = 2024 - 1974;
}

$Leo = new Persona();
echo "Mi nombre es: $Leo->nombre";
echo "\nMi apellido es: $Leo->apellido";
echo "\nMi edad es: $Leo->edad";

$Angelina = new Persona();
$Angelina->nombre = "Angelina";
$Angelina->apellido = "Jolie";
echo "\nMi nombre es: $Angelina->nombre";
echo "\nMi apellido es: $Angelina->apellido";