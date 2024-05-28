<?php

class Libro {
    private $id;
    private $titulo;
    private $autor;

    public function __construct($id, $titulo, $autor) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function __toString() {
        return "{$this->titulo} ({$this->id}), Autor: {$this->autor}";
    }
}
?>