<?php

// --------------------------------
// -- Parámetros iniciales
// --------------------------------

/*
Cada objeto que se crea a partir de una clase puede pasar parámetros en la declaración inicial.
Estos parámetros se pasan al __construct que se llama automáticamente.
*/

class Persona
{
    const PROMEDIO_VIDA = 80;
    const PROMEDIO_ALTURA = 1.7;

    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    public $altura;

    // Constructor
    public function __construct($nombre, $apellido, $fechaNacimiento = 2000, $altura = Persona::PROMEDIO_ALTURA){
       $this->setNombre($nombre);
       $this->setApellido($apellido);
       $this->setfechaNacimiento($fechaNacimiento);
       $this->altura = $altura;
    }
    
    function calcularEdad(){
        return date("Y") - $this->fechaNacimiento;
    }
    // Metodos getters y setters (Lectura y Escritura)
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getfechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function setfechaNacimiento($fechaNacimiento){
        // Validar que no sea menor de edad o mayor a cierto limite
        if($fechaNacimiento < date("Y")-100 || $fechaNacimiento > date("Y")-18){
            throw new Exception("La fecha de nacimiento no es válida");
        } else {
            $this->fechaNacimiento = $fechaNacimiento;
        }
    }
}

$Leo = new Persona("Leonardo", "Di Caprio", 1974);
echo "Mi nombre es: " . $Leo->getNombre();
echo "\nMi apellido es: " . $Leo->getApellido();
echo "\nMi edad es: " . $Leo->calcularEdad();

$Angelina = new Persona("Angelina", "Jolie", 1975);
/* $Angelina->setNombre("Angelina");
$Angelina->setApellido("Jolie");
$Angelina->setfechaNacimiento(1975); */
echo "\nMi nombre es: " . $Angelina->getNombre();
echo "\nMi apellido es: " . $Angelina->getApellido();
echo "\nMi edad es: " . $Angelina->calcularEdad();
echo "\nMi altura es: " . $Angelina->altura;