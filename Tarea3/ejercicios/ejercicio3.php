<?php
function binarioADecimal($binario) {
    $decimal = 0;
    $longitud = strlen($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $digito = $binario[$i];
        $decimal += $digito * pow(2, $longitud - $i - 1);
    }

    return $decimal;
}

echo "Introduce un número binario: ";
$binario = trim(fgets(STDIN));

if (preg_match('/^[01]+$/', $binario)) {
    $decimal = binarioADecimal($binario);
    echo "El número binario $binario en decimal es $decimal\n";
} else {
    echo "Entrada no válida. Asegúrate de introducir solo 0s y 1s.\n";
}
?>
