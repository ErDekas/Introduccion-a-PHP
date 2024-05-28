<?php
enum Palo: String {
    case ESPADA = "ESPADA";
    case BASTO = "BASTO";
    case COPA = "COPA";
    case ORO = "ORO";
}

function mostrarPalos() {
    echo "PALOS DE LA BARAJA ESPAÑOLA\n";
    echo "---------------------------\n";

    $palos = Palo::cases();

    foreach ($palos as $index => $palo) {
        echo "Palo " . ($index + 1) . ": " . $palo->value . "\n";
    }
}

mostrarPalos();

?>
