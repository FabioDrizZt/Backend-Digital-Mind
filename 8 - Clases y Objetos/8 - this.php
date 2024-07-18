<?php

// --------------------------------
// -- $this
// --------------------------------

/*
A veces necesitamos acceder a las propiedades (variables) o métodos (funciones) de una clase
Para referenciarse a sí misma utilizamos la pseudo-variable $this
$this es una referencia al objeto que llama.
La pseudo-variable $this está disponible dentro de cualquier método de la clase cuando ese método
es llamado desde un contexto de objeto.
*/

class Persona
{
    const PROMEDIO_VIDA = 80;

    protected $nombre = "Leonardo";
    protected $apellido = "Di Caprio";
    protected $fechaNacimiento = 1974;

    function calcularEdad(){
        return date("Y") - $this->fechaNacimiento;
    }
    // Metodos getters y setters (Lectura y Escritura)
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function getApellido(){
    }
    public function setApellido(){
    }
    public function getfechaNacimiento(){
    }
    public function setfechaNacimiento($fechaNacimiento){
        // Validar que no sea menor de edad o mayor a cierto limite
        if($fechaNacimiento < date("Y")+100 || $fechaNacimiento > date("Y")-18){
            throw new Exception("La fecha de nacimiento no es válida");
        } else {
            $this->fechaNacimiento = $fechaNacimiento;
        }
    }
}

$Leo = new Persona();
echo "Mi nombre es: $Leo->nombre";
echo "\nMi apellido es: $Leo->apellido";

$Angelina = new Persona();
$Angelina->nombre = "Angelina";
$Angelina->apellido = "Jolie";
echo "\nMi nombre es: $Angelina->nombre";
echo "\nMi apellido es: $Angelina->apellido";