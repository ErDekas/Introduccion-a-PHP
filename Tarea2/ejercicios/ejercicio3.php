<?php
const MIN_LARGOS = 0;
const MAX_LARGOS = 50;
const MAX_INTENTOS = 3;

$intentos = 0;
$largos = -1;

while ($intentos < MAX_INTENTOS) {
    echo "Introduce la cantidad de largos (0-50): ";
    $largos = intval(fgets(STDIN));
    
    if ($largos >= MIN_LARGOS && $largos <= MAX_LARGOS) {
        break;
    }

    $intentos++;
    echo "Valor inválido. Intento $intentos de " . MAX_INTENTOS . ".\n";
}

if ($intentos == MAX_INTENTOS) {
    echo "Se ha superado el máximo de intentos erróneos.\n";
    exit;
}

$resultado = "{ ";

for ($i = 1; $i <= $largos; $i++) {
    switch (($i - 1) % 4) {
        case 0:
            $resultado .= "Crol ";
            break;
        case 1:
            $resultado .= "Espalda ";
            break;
        case 2:
            $resultado .= "Braza ";
            break;
        case 3:
            $resultado .= "Espalda ";
            break;
    }
}

$resultado .= "}";
echo $resultado . "\n";
?>
