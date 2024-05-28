<?php
echo "Introduce el día de tu cumpleaños (1-31): ";
$dia = intval(fgets(STDIN));

echo "Introduce el mes de tu cumpleaños (1-12): ";
$mes = intval(fgets(STDIN));

$fechaCorrecta = false;

if ($mes < 1 || $mes > 12) {
    echo "La fecha no es correcta\n";
} else {
    switch ($mes) {
        case 4: case 6: case 9: case 11:
            if ($dia >= 1 && $dia <= 30) $fechaCorrecta = true;
            break;
        case 2:
            if ($dia >= 1 && $dia <= 28) $fechaCorrecta = true;
            break;
        default:
            if ($dia >= 1 && $dia <= 31) $fechaCorrecta = true;
            break;
    }
}

if (!$fechaCorrecta) {
    echo "La fecha no es correcta\n";
    exit;
}

if (($mes == 3 && $dia >= 21) || ($mes == 6 && $dia < 21) || ($mes == 4) || ($mes == 5)) {
    echo "Primavera\n";
} elseif (($mes == 6 && $dia >= 21) || ($mes == 9 && $dia < 23) || ($mes == 7) || ($mes == 8)) {
    echo "Verano\n";
} elseif (($mes == 9 && $dia >= 23) || ($mes == 12 && $dia < 21) || ($mes == 10) || ($mes == 11)) {
    echo "Otoño\n";
} else {
    echo "Invierno\n";
}
?>
