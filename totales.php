<?php
function calcularPrecioTotal($precioBase, $impuesto, $unidades) {
    // Solución: solo había que multiplicar igual las unidades
    $precioTotal = ($precioBase + ($precioBase * $impuesto)) * $unidades;
    return $precioTotal;
}

// Ejemplo de uso // hay que hacer algo más dinámico
$precioBase = 10; // Precio base de un producto
$impuesto = 0.15; // Impuesto del 15%
$unidades = 5; // Número de unidades

$precioTotal = calcularPrecioTotal($precioBase, $impuesto, $unidades);

echo "El precio total es: $precioTotal";
?>
