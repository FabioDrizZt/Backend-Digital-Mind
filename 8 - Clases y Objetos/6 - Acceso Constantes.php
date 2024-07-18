<?php

// --------------------------------
// -- Acceso a las constantes
// --------------------------------

/*
Acceder a una constante es diferente que acceder a una propiedad. Usamos el mismo objeto
pero en lugar del -> usamos el :: (operador de resolución de ámbito)
Esto se tratará con más detalle más adelante en este módulo, pero por ahora sólo hay que saber
que para acceder a una constante dentro de una clase usamos ::.
Operador de resolución de ámbito - Paamayim Nekudotayim (dos puntos dobles en hebreo)
*/

class Persona
{
    const PROMEDIO_VIDA = 80;

    public $nombre = "Leonardo";
    public $apellido = "Di Caprio";
    public $fechaNacimiento = 1974;
}

/* $Leo = new Persona(); 
echo "El promedio de vida es: " . $Leo::PROMEDIO_VIDA; */
echo "El promedio de vida es: " . Persona::PROMEDIO_VIDA; 