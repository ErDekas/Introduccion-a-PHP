<?php
function baseADecimal($numero, $base) {
    return base_convert($numero, $base, 10);
}

function decimalABase($decimal, $base) {
    return base_convert($decimal, 10, $base);
}

function convertirBase($numero, $baseOrigen, $baseDestino) {
    // Primero convertimos de la base de origen a decimal
    $decimal = baseADecimal($numero, $baseOrigen);
    // Luego convertimos de decimal a la base de destino
    return decimalABase($decimal, $baseDestino);
}

function obtenerBase($base) {
    switch (strtolower($base)) {
        case 'decimal': return 10;
        case 'binario': return 2;
        case 'octal': return 8;
        case 'hexadecimal': return 16;
        default: return -1;
    }
}

function seleccionarBase($mensaje) {
    echo $mensaje;
    echo "1. Decimal\n";
    echo "2. Binario\n";
    echo "3. Octal\n";
    echo "4. Hexadecimal\n";
    $opcion = intval(fgets(STDIN));
    
    switch ($opcion) {
        case 1: return 'decimal';
        case 2: return 'binario';
        case 3: return 'octal';
        case 4: return 'hexadecimal';
        default: return null;
    }
}

echo "Conversión entre bases numéricas\n";

$baseOrigen = seleccionarBase("Selecciona la base de origen:\n");
if ($baseOrigen === null) {
    echo "Opción no válida. Fin del programa.\n";
    exit;
}

echo "Introduce el número en base $baseOrigen: ";
$numero = trim(fgets(STDIN));

$baseDestino = seleccionarBase("Selecciona la base de destino:\n");
if ($baseDestino === null) {
    echo "Opción no válida. Fin del programa.\n";
    exit;
}

$baseOrigenNumerica = obtenerBase($baseOrigen);
$baseDestinoNumerica = obtenerBase($baseDestino);

if ($baseOrigenNumerica == -1 || $baseDestinoNumerica == -1) {
    echo "Base no válida. Fin del programa.\n";
} else {
    $resultado = convertirBase($numero, $baseOrigenNumerica, $baseDestinoNumerica);
    echo "El número $numero en base $baseOrigen convertido a base $baseDestino es: $resultado\n";
}
?>
