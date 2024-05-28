<?php
echo "REPARTO DE FRUTA\n";
echo "----------------\n";
echo "Introduzca los kilogramos totales con los que cargar el camión: ";
$cargaInicial = (int)trim(fgets(STDIN));

$cargaRestante = $cargaInicial;

for ($i = 1; $i <= 3; $i++) {
    echo "\nParada $i del camión para repartir.\n";
    echo "Introduzca los kilogramos totales que debe repartir en esta parada: ";
    $reparto = (int)trim(fgets(STDIN));

    if ($reparto <= $cargaRestante) {
        $cargaRestante -= $reparto;
        echo "El camión reparte $reparto kg y quedan por repartir $cargaRestante kg.\n";
    } else {
        echo "No hay suficiente carga para repartir $reparto kg. Se reparte lo que queda: $cargaRestante kg.\n";
        $cargaRestante = 0;
        break;
    }
}

echo "\nRESULTADO\n";
echo "---------\n";
if ($cargaRestante == 0) {
    echo "Se repartió toda la fruta.\n";
} else {
    echo "Quedó algo por repartir.\n";
}
?>
