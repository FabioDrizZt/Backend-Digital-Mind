<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------


/*

Esto permite la ejecución condicional.


Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.

Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).


 */

$edad = rand(15,20); // readline("Ingrese su edad: ");
echo "su edad ingresada es: $edad";

if ($edad>=18) {
    echo "\n Eres mayor de edad";
} else {
    echo "\n Eres menor de edad";
}

$user = 'admin';
$pass = '123';
$usuario = readline("Ingrese su nombre de usuario: ");
$password = readline("Ingrese su contraseña: ");

// if($usuario == $user && $password == $pass){
//     echo "\n Acceso permitido";
// } else {
//     echo "\n Acceso denegado: usuario o la contraseña es incorrecta";
// }
if($usuario == $user){
    if ($password == $pass){
        echo "\n Acceso permitido";
    } else {
        echo "\n Acceso denegado: la contraseña es incorrecta";
    }
} else {
    echo "\n Acceso denegado: usuario incorrecto";
}

echo "\n Fin del programa.";