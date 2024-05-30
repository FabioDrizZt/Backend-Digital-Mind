<?php

// Esto es un comentario de doble barra y de una linea se hace con shift+7 se puede hacer con ctrl+k+c

# Esto es un comentario de una linea con hashtag o numeral o almohadilla o sharp o cat se hace con shift+3

/* Esto es un comentario de varias lineas 
aqui hay otra linea 
tambien es denominado comentario de bloque 
Se puede hacer con alt+shift+A */

/* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sit, ex ipsa 
quia culpa pariatur deleniti, magnam commodi veritatis veniam laborum, recusandae dolor.
 Amet temporibus quo iure! Velit iusto maiores perspiciatis facere, eligendi ipsam id, ad, qua
 si consectetur voluptatibus at blanditiis minima. Molestias ad officiis similique! Placeat, aspernatur, non unde offic
 iis minima quia, qui sequi deleniti magnam vel quis maxime corporis doloribus. Perspiciatis al
 iquam vero beatae laborum. Rerum saepe, earum soluta quas ad illum nemo quibusdam eos sit libero non adipisci aut ut, magn
 i veritatis! Dolore facere nihil nulla, eveniet veritatis doloribus quae voluptatum similique n
 ostrum beatae maxime hic ut. */

 echo "Hola";

// Las variables SI son sensibles a las mayusculas y minusculas (case sensitive)
$MiVariableConCamelCase = /* Aca le asigno un valor de tipo cadena */ "upper"; //UpperCamelCase
$miVariableConCamelCase = "lower"; //lowerCamelCase

// Las clases y objetos no son sensibles a las mayusculas y minusculas (case sensitive)
class Persona{
    
}

$p1 = new Persona;
$p2 = new PerSoNa;
$p3 = new PERSONA;

// Las funciones no son sensibles a las mayusculas y minusculas (case sensitive)
function SitioWeb(){
    echo "soydigitalmind.com";
}

echo PHP_EOL;
SITIOWEB();