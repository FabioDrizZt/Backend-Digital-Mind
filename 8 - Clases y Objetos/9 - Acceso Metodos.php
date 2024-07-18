<?php
// --------------------------------
// -- Acceso a Metodos
// --------------------------------

/*
Para llamar a un método dentro de una clase usamos nuestro objeto que hemos creado
seguido del -> (operador de objeto) y luego usamos el nombre del método/función.  Si la función
función requiere algún parámetro, lo pasamos también, como cualquier otra llamada a una función.
llamada.
 */

 class Persona
{
    const PROMEDIO_VIDA = 80;

    private $nombre = "Leonardo";
    private $apellido = "Di Caprio";
    private $fechaNacimiento = 1974;

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

$Leo = new Persona();
echo "Mi nombre es: " . $Leo->getNombre();
echo "\nMi apellido es: " . $Leo->getApellido();
echo "\nMi edad es: " . $Leo->calcularEdad();

$Angelina = new Persona();
$Angelina->setNombre("Angelina");
$Angelina->setApellido("Jolie");
$Angelina->setfechaNacimiento(1975);
echo "\nMi nombre es: " . $Angelina->getNombre();
echo "\nMi apellido es: " . $Angelina->getApellido();
echo "\nMi edad es: " . $Angelina->calcularEdad();