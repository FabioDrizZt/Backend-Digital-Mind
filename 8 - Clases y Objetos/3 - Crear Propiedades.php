<?php

// --------------------------------
// -- Crear una propiedad
// --------------------------------

/*
Cuando se declaran propiedades se pueden establecer valores vacios a variables específicas dentro de la clase.
Cualquier propiedad con un valor establecido debe ser una constante simple, lo que significa que no puede tener un valor sobre el que se actúe.
*/
/* visibilidades: public - protected - private */

class Persona {
    public $nombre = 'Juan';
    public $apellido = 'Perez';
    public $edad;
}