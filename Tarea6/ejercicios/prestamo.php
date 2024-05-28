<?php

class Prestamo {
    private $usuario;
    private $libro;
    private $fechaInicio;

    public function __construct($usuario, $libro, $fechaInicio) {
        $this->usuario = $usuario;
        $this->libro = $libro;
        $this->fechaInicio = $fechaInicio;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getLibro() {
        return $this->libro;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function __toString() {
        return "Prestamo: {$this->libro->getTitulo()} a {$this->usuario->getNombre()} desde {$this->fechaInicio->format('Y-m-d')}";
    }
}
?>