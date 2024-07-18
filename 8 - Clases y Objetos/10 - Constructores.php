<?php

// --------------------------------
// -- Constructores
// --------------------------------

/*
Los constructores son llamados cuando se crea un objeto de clase.
Se utilizan para establecer cualquier inicialización que el objeto
puede necesitar antes de ser utilizado.
Piensa en ello como una función, pero con un nombre designado. El nombre
es __construct()
Normalmente se colocan al principio de todos los métodos dentro de la clase.
*/

class Persona
{
    const PROMEDIO_VIDA = 80;

    private $nombre;
    private $apellido;
    private $fechaNacimiento;

    // Constructor
    public function __construct($nombre, $apellido, $fechaNacimiento){
       $this->setNombre($nombre);
       $this->setApellido($apellido);
       $this->setfechaNacimiento($fechaNacimiento);
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