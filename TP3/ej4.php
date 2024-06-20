Imprimir un listado con los números impares desde 1 hasta 999 y seguidamente otro listado con los
números pares desde 2 hasta 1000

<?php 

for ($i=1; $i <= 999 ; $i+=2) { 
    echo "$i \n";
}
for ($i=2; $i <= 1000 ; $i+=2) { 
    echo "$i \n";
}