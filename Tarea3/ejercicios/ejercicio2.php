<?php
function esCapicua($numero) {
    $cadena = strval($numero);
    $reversa = strrev($cadena);
    return $cadena === $reversa;
}

for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . "\n";
    }
}
?>
