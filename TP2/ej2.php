<!-- Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en
su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor
o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a
3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación
es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente -->
<?php

// Datos de Entradas             --> Resolución --> Datos de Salida
// Nota, Carrera (Diurna o Vespertina) --> Resolución: --> "Se exime", "Rinde examen", "Reprueba"

// Resolución

$Carrera = readline('Ingrese su carrera: (Vespertina o diurna)');
$Nota = rand(0,10);
echo "Su nota es: $Nota";

if ($Nota < 3.5){
    echo "\nReprueba";
} else {
    if ($Carrera == "Vespertina"){
        if ($Nota < 6) {
            echo "\nRinde examen";
        } else { // $nota >= 6
            echo "\nSe exime";
        }
    } else {// Carrera: Diurna
        echo "\nRinde examen";
    }
}

// if ($Nota < 3.5){
//     echo "Reprueba";
// } else {
//     if ($Carrera == "Diurna"){
//         echo "Rinde examen";
//     } else {// Carrera: Diurna
//         if ($Nota < 6) {
//             echo "Rinde examen";
//         } else { // $nota >= 6
//             echo "Se exime";
//         }
//     }
// }