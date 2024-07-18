<?php

// --------------------------------
// -- Herencia
// --------------------------------

/*

La herencia permite que una clase herede los métodos y propiedades de otra clase,
lo que significa que tiene acceso a ellos a través de la variable del objeto de la clase hija.

 */

 class Persona
{
    const PROMEDIO_VIDA = 80;
    const PROMEDIO_ALTURA = 1.7;

    protected $nombre;
    protected $apellido;
    protected $fechaNacimiento;
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
    public function getNombreCompleto(){
        return $this->nombre . " " . $this->apellido;
    }
}

Class Actor extends Persona {
    private $seudonimo;
    private $peliculas = array();
    private $personajes = array();
    private $premiosNominados = [];
    private $premiosRecibidos = [];

    public function getSeudonimo(){
        return $this->seudonimo;
    }
    public function setSeudonimo($seudonimo){
        $this->seudonimo = $seudonimo;
    }
    public function getNombreCompleto(){
        return $this->nombre . " " . $this->apellido . " Alias: " . $this->seudonimo;
    }
}

$Leo = new Actor("Leonardo", "Di Caprio", 1974);
echo "Mi nombre es: " . $Leo->getNombre();
echo "\nMi apellido es: " . $Leo->getApellido();
echo "\nMi edad es: " . $Leo->calcularEdad();

$Angelina = new Persona("Angelina", "Jolie", 1975);
/* $Angelina->setNombre("Angelina");
$Angelina->setApellido("Jolie");
$Angelina->setfechaNacimiento(1975); */
/* echo "\nMi nombre es: " . $Angelina->getNombre();
echo "\nMi apellido es: " . $Angelina->getApellido(); */
echo "\nMi nombre completo es: " . $Angelina->getNombreCompleto();
echo "\nMi edad es: " . $Angelina->calcularEdad();
echo "\nMi altura es: " . $Angelina->altura;

$nuevoActor = new Actor("Elmer", "Figueroa", 1968);
$nuevoActor->setSeudonimo("Chayanne");

echo "\nMi nombre es: " . $nuevoActor->getNombre();
echo "\nMi apellido es: " . $nuevoActor->getApellido();
echo "\nMi seudonimo es: " . $nuevoActor->getSeudonimo();
echo "\nMi nombre completo es: " . $nuevoActor->getNombreCompleto();