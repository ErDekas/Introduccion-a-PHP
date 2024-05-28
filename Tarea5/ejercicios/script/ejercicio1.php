
<?php

class Jugador {
    private $dorsal;
    private $nombre;
    private $mote;

    public function __construct($dorsal, $nombre, $mote) {
        $this->dorsal = $dorsal;
        $this->nombre = $nombre;
        $this->mote = $mote;
    }

    public function getDorsal() {
        return $this->dorsal;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getMote() {
        return $this->mote;
    }

    public function setDorsal($dorsal) {
        $this->dorsal = $dorsal;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setMote($mote) {
        $this->mote = $mote;
    }

    public function __toString() {
        return "{$this->nombre} {$this->dorsal} {$this->mote}";
    }
}

function leerJugadores($archivo) {
    $jugadores = [];
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);

    foreach ($lineas as $linea) {
        list($nombre, $dorsal, $mote) = explode(' ', $linea, 3);
        $jugadores[] = new Jugador((int)$dorsal, $nombre, $mote);
    }

    return $jugadores;
}

function filtrarJugadores($jugadores, $faltan) {
    return array_filter($jugadores, function($jugador) use ($faltan) {
        foreach ($faltan as $falta) {
            if ($jugador->getDorsal() === $falta->getDorsal()) {
                return false;
            }
        }
        return true;
    });
}

$jugadores = leerJugadores('jugadores.txt');
$faltan = leerJugadores('faltan.txt');

$jugadoresActualizados = filtrarJugadores($jugadores, $faltan);

$nuevaPlantilla = fopen('nuevaJugadores.txt', 'w');
fwrite($nuevaPlantilla, count($jugadoresActualizados) . "\n");

foreach ($jugadoresActualizados as $jugador) {
    fwrite($nuevaPlantilla, $jugador . "\n");
}

fclose($nuevaPlantilla);

unlink('faltan.txt');
unlink('jugadores.txt');

echo "Plantilla actualizada y archivos antiguos eliminados.\n";
?>