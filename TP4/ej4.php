Escribir un algoritmo que utilice un módulo procedimiento denominado mM que tiene un parámetro
formal X de tipo carácter, si el carácter que recibe es una letra en minúscula modifica el parámetro
con carácter en mayúscula

<?php

function mM($X){
    // return strToUpper($X);
    switch ($X) {
        case 'a':
            return 'A';
        case 'b':
            return 'B';
        default:
           return $X;
    }
}

echo "\na en mayuscula es: ", mM('a');
echo "\nb en mayuscula es: ", mM('b');