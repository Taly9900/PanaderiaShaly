<?php
function calcularPrecioTotal($precioBase, $impuesto, $unidades) {
    // Error: el cálculo no considera las unidades
    $precioTotal = $precioBase + ($precioBase * $impuesto);
    return $precioTotal;
}

// Ejemplo de uso
$precioBase = 10; // Precio base de un producto
$impuesto = 0.15; // Impuesto del 15%
$unidades = 5; // Número de unidades

$precioTotal = calcularPrecioTotal($precioBase, $impuesto, $unidades);

echo "El precio total es: $precioTotal";
?>
