<?php

function realizarCalculos($num1, $num2) {
    $doblePrimerNumero = 2 * $num1;
    $mitadSegundoNumero = $num2 / 2;
    $suma = $num1 + $num2;
    $cuadradoDeLaSuma = pow($suma, 2);
    $sumaDeLosCuadrados = pow($num1, 2) + pow($num2, 2);
    $decimaParteDeLaSumaDeLosCuadrados = $sumaDeLosCuadrados / 10;

    echo "RESULTADO\n";
    echo "---------\n";
    echo "Doble del primer número: " . $doblePrimerNumero . "\n";
    echo "Mitad del segundo número: " . $mitadSegundoNumero . "\n";
    echo "Cuadrado de la suma de ambos número: " . $cuadradoDeLaSuma . "\n";
    echo "Décima parte de la suma de los cuadrados de ámbos números: " . $decimaParteDeLaSumaDeLosCuadrados . "\n";

}

echo "CÁLCULOS ARITMÉTICOS\n";
echo "--------------------\n";
echo "Se van a realizar una serie de operaciones con dos números reales\n";

echo "Introduce el primer número: ";
$numero1 = (float)trim(fgets(STDIN));

echo "Introduce el segundo número: ";
$numero2 = (float)trim(fgets(STDIN));

realizarCalculos($numero1, $numero2);
?>