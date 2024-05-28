<?php
echo "METROS CUADRADOS DEL EXTERIOR DE UNA CASA\n";
echo "-----------------------------------------\n";
echo "Introduzca la longitud del lado largo de la figura (en metros): ";
$ladoLargo = (float)trim(fgets(STDIN));

echo "Introduzca la longitud del lado corto de la figura (en metros): ";
$ladoCorto = (float)trim(fgets(STDIN));

$areaPanelA = $ladoCorto * $ladoCorto;
$areaPanelB = $ladoLargo * $ladoCorto;
$areaPanelC = pi() * pow(($ladoCorto / 2), 2);
$areaPanelD = $ladoLargo * $ladoCorto;

$superficieTotal = ($areaPanelA * 1) + ($areaPanelB * 2) + ($areaPanelC * 1) + ($areaPanelD * 1);

echo "\nRESULTADO\n";
echo "---------\n";
echo "Metros cuadrados de los paneles de tipo A: " . $areaPanelA . "\n";
echo "Metros cuadrados de los paneles de tipo B: " . $areaPanelB . "\n";
echo "Metros cuadrados de los paneles de tipo C: " . $areaPanelC . "\n";
echo "Metros cuadrados de los paneles de tipo D: " . $areaPanelD . "\n";
echo "\nSuperficie total del exterior de la casa: " . $superficieTotal . " metros cuadrados\n";
?>
