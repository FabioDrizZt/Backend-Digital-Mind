<!-- En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor
de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de
color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es
amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el
cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados. -->

<?php
// Leer datos de entrada:

$color_bolita = readline('Ingrese el color de la bolita: (verde, amarillo, naranja, azul, blanco)');
$valor_compra = rand(-10000,50000);
echo "Valor de compra sin descuento: $valor_compra \n";
echo "Color de la bolita: $color_bolita \n";

// Validar datos de entrada
if ($valor_compra<1){
    echo "Error: el valor de la compra debe ser positivo";
} elseif ($color_bolita != 'verde' && $color_bolita != 'amarillo' && $color_bolita != 'naranja' && $color_bolita != 'azul' && $color_bolita != 'blanco' ){
    echo "Error: el color de la bolita debe ser verde, amarillo, naranja, azul, blanco";
} else {
    // Calcular descuento
    $descuento = match($color_bolita) {
        'verde' => 0.10,
        'amarillo' => 0.25,
        'naranja' => 1.00,
        'azul' => 0.50,
        'blanco' => 0.00,
    };
    // Calcular valor del descuento
    $valor_descuento = $valor_compra * $descuento;

    // Calcular el total a pagar
    $total_pagar = $valor_compra - $valor_descuento;

    //Mostramos el total a pagar
    echo "Valor de compra con descuento: $total_pagar \n";
}