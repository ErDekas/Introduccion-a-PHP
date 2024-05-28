<?php
function decimalABinario($decimal) {
    if ($decimal == 0) {
        return "0";
    }

    $binario = "";

    while ($decimal > 0) {
        $residuo = $decimal % 2;
        $binario = $residuo . $binario;
        $decimal = intdiv($decimal, 2);
    }

    return $binario;
}

echo "Introduce un número decimal: ";
$decimal = intval(fgets(STDIN));

if ($decimal >= 0) {
    $binario = decimalABinario($decimal);
    echo "El número decimal $decimal en binario es $binario\n";
} else {
    echo "Entrada no válida. Asegúrate de introducir un número entero no negativo.\n";
}
?>
