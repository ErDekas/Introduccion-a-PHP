<?php
echo "Introduce un mes (1-12): ";
$mes = intval(fgets(STDIN));
$dias = 0;

switch ($mes) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        $dias = 31;
        break;
    case 4: case 6: case 9: case 11:
        $dias = 30;
        break;
    case 2:
        $dias = 28;
        break;
    default:
        $dias = 0;
        break;
}

echo "El mes tiene $dias días.\n";
?>
