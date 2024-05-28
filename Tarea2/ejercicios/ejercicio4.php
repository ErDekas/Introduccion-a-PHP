<?php
do {
    echo "Introduce el número de filas (1-10): ";
    $filas = intval(fgets(STDIN));
} while ($filas < 1 || $filas > 10);

$contador = 1;

for ($i = 1; $i <= $filas; $i++) {
    echo "$i: ";
    for ($j = 0; $j < $i; $j++) {
        echo $contador++ . " ";
    }
    echo "\n";
}
?>
