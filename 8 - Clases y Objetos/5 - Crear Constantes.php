<?php

// --------------------------------
// -- Creación de una constante
// --------------------------------

/*

Las constantes normales de PHP pueden ser usadas dentro de una clase, pero una clase puede tener sus
propias constantes que sólo están disponibles cuando se usa esa clase en particular.

 */

class Persona
{
    const PROMEDIO_VIDA = 80;
    public $nombre = "Leonardo";
    public $apellido = "Di Caprio";
    public $altura;
    public $genero;
    public $edad = 2024 - 1974;
}