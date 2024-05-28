<?php
echo "Análisis de un número\n";
echo "---------------------\n";
echo "Introduce un número entero: ";
$numero = (int)trim(fgets(STDIN));

$esCero = ($numero === 0) ? 'true' : 'false';
$esPositivo = ($numero > 0) ? 'true' : 'false';
$esMenorQue100 = ($numero < 100) ? 'true' : 'false';
$esPar = ($numero % 2 === 0) ? 'true' : 'false';

echo "\nRESULTADO\n";
echo "---------\n";
echo "El número es cero: " . $esCero . "\n";
echo "El número es positivo: " . $esPositivo . "\n";
echo "El número es menos que 100: " . $esMenorQue100 . "\n";
echo "El número es par: " . $esPar . "\n";
?>
