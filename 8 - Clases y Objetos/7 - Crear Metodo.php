<?php

// --------------------------------
// -- Creación de métodos
// --------------------------------

/*
Cuando una función se encuentra dentro de una clase, normalmente se denomina
un método. Creamos el método igual que la función, la única diferencia...
Lo llamamos método.
*/
/* visibilidades: public - protected - private */

class Persona
{
    const PROMEDIO_VIDA = 80;

    public $nombre = "Leonardo";
    public $apellido = "Di Caprio";
    public $fechaNacimiento = 1974;

    function calcularEdad(){
        return date("Y") - $this->fechaNacimiento;
    }
    // Metodos getters y setters (Lectura y Escritura)
    public function getNombre(){
    }
    public function setNombre(){
    }
    public function getApellido(){
    }
    public function setApellido(){
    }
    public function getfechaNacimiento(){
    }
    public function setfechaNacimiento(){
    }
}

$Leo = new Persona();
echo "Mi nombre es: $Leo->nombre";
echo "\nMi apellido es: $Leo->apellido";