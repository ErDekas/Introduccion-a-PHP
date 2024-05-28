<?php
echo "ESTANTERÍAS Y BOMBILLAS\n";
echo "-----------------------\n";
echo "Introduzca la cantidad de bombillas que se desean colocar: ";
$cantidadBombillas = (int)trim(fgets(STDIN));

$capacidadEstanteria = 40;
$estanteriasCompletas = intdiv($cantidadBombillas, $capacidadEstanteria);
$huecosLibresUltimaEstanteria = $capacidadEstanteria - ($cantidadBombillas % $capacidadEstanteria);

echo "\nRESULTADO\n";
echo "---------\n";
echo "Cantidad de estanterías completas: " . $estanteriasCompletas . "\n";
echo "Cantidad de huecos libres en la última estantería no completa: " . $huecosLibresUltimaEstanteria . "\n";
?>
