<?php

// --------------------------------
// -- Operadores lógicos ~ &&, ||, and, or, xor !
// --------------------------------

/*

&&  --> Ambos lados son verdaderos
and --> Ambos lados son verdaderos

________________________________________
| and(true, true) = true
| and(true, false) = false
| and(false, true) = false
| and(false, false) = false
________________________________________

* 
1*1=1
1*0=0
0*1=0
0*0=0

|| --> Cualquiera de los dos lados sólo tiene que ser verdadero
or --> Cualquiera de los dos lados sólo tiene que ser verdadero

________________________________________
| or(true, true) = true
| or(true, false) = true
| or(false, true) = true
| or(false, false) = false
________________________________________

+
1+1=1
1+0=1
0+1=1
0+0=0

Operador O Exclusivo
xor --> Solamente un lado debe ser verdadero
________________________________________
| xor(true, true) = false
| xor(true, false) = true
| xor(false, true) = true
| xor(false, false) = false
________________________________________

Operador de Negación
!   -->  Verdadero si el valor no es verdadero
_______________________________________
| !(true) = false
| !(false) = true
________________________________________
*/

$var1 = (6 > 7); // false
$var2 = (8==8); // true
$var3 = false;
$var4 = true;

var_dump($var1 && $var2);
var_dump($var2 and $var4);

var_dump($var1 || $var2);
var_dump($var1 or $var3);

var_dump($var1 xor $var2);
var_dump($var1 xor $var3);
var_dump($var2 xor $var4);

var_dump(!$var1);
var_dump(!$var2);