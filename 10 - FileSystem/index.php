<?php
// CONSTANTES
/* echo __DIR__; // Ruta de la Directorio/Carpeta actual del archivo en el que estoy
echo PHP_EOL;
echo __LINE__; // Linea actual del código
echo PHP_EOL;
echo __FILE__; // Ruta + Nombre del archivo/fichero
echo PHP_EOL;
echo __LINE__; */

// Crear directorio/carpeta
//mkdir('prueba');

// Esperar 3 segundos
//sleep(3);

// Renombrar un directorio/carpeta
//rename('prueba','prueba2');

// Esperar 3 segundos
//sleep(3);

// Borrar un directorio/carpeta
/* if(file_exists('prueba2') && is_dir('prueba2')){
    rmdir('prueba2');
} */

// Leer archivos y carpetas dentro de un directorio
$archivos = scandir('.');
print_r($archivos);

foreach ($archivos as $archivo){
    echo $archivo . PHP_EOL;
}

// Leer contenido de archivo interno
$lorem = file_get_contents('lorem.html');

echo $lorem;

// Crear el contenido de un archivo 
file_put_contents('prueba/datos.txt', 'Mi nombre es Fabio');
// Modificar el contenido de un archivo 
file_put_contents('lorem.html', $lorem . ' Mi nombre es Fabio');

// Leer contenido de un archivo externo (URL)
$contenidoJSON = file_get_contents('https://apis.datos.gob.ar/georef/api/provincias');

var_dump(json_decode($contenidoJSON));

//Obtener tamaño de un archivo
var_dump(filesize('lorem.html'));

//borrar un archivo
unlink('prueba/datos.txt');