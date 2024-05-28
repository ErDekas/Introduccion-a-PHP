<?php

class Biblioteca {
    private $usuarios;
    private $libros;
    private $prestamos;
    private $prestamosActivos;

    public function __construct() {
        $this->usuarios = [];
        $this->libros = [];
        $this->prestamos = [];
        $this->prestamosActivos = new SplObjectStorage();
    }

    public function menu() {
        do {
            echo "Menú de la Biblioteca\n";
            echo "=====================\n";
            echo "1. Registrar nuevo usuario\n";
            echo "2. Ver información de un usuario\n";
            echo "3. Registrar nuevo libro\n";
            echo "4. Ver información de un libro\n";
            echo "5. Realizar préstamo de libro\n";
            echo "6. Finalizar préstamo activo\n";
            echo "7. Consultar libros disponibles\n";
            echo "8. Consultar préstamos activos\n";
            echo "0. Salir\n";
            echo "Elige una opción: ";
            $opcion = trim(fgets(STDIN));

            switch ($opcion) {
                case 1:
                    $this->registrarUsuario();
                    break;
                case 2:
                    $this->verInformacionUsuario();
                    break;
                case 3:
                    $this->registrarLibro();
                    break;
                case 4:
                    $this->verInformacionLibro();
                    break;
                case 5:
                    $this->realizarPrestamo();
                    break;
                case 6:
                    $this->finalizarPrestamo();
                    break;
                case 7:
                    $this->consultarLibrosDisponibles();
                    break;
                case 8:
                    $this->consultarPrestamosActivos();
                    break;
                case 0:
                    echo "Saliendo...\n";
                    break;
                default:
                    echo "Opción no válida, intenta de nuevo.\n";
                    break;
            }
        } while ($opcion != 0);
    }

    private function registrarUsuario() {
        echo "Registro de nuevo usuario\n";
        echo "Ingrese el ID del usuario: ";
        $id = trim(fgets(STDIN));
        echo "Ingrese el nombre del usuario: ";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese el correo del usuario: ";
        $correo = trim(fgets(STDIN));
    
        $usuario = new Usuario($id, $nombre, $correo);
        $this->usuarios[] = $usuario;
    
        echo "Usuario registrado con éxito.\n";
    }
    
    private function verInformacionUsuario() {
        echo "Ingrese el ID del usuario: ";
        $id = trim(fgets(STDIN));
    
        $usuarioEncontrado = false;
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getId() === $id) {
                echo "Información del usuario:\n";
                echo $usuario . "\n";
                $usuarioEncontrado = true;
                break;
            }
        }
    
        if (!$usuarioEncontrado) {
            echo "Usuario no encontrado.\n";
        }
    }
    
    private function registrarLibro() {
        echo "Registro de nuevo libro\n";
        echo "Ingrese el ID del libro: ";
        $id = trim(fgets(STDIN));
        echo "Ingrese el título del libro: ";
        $titulo = trim(fgets(STDIN));
        echo "Ingrese el autor del libro: ";
        $autor = trim(fgets(STDIN));
    
        $libro = new Libro($id, $titulo, $autor);
        $this->libros[] = $libro;
    
        echo "Libro registrado con éxito.\n";
    }
    
    private function verInformacionLibro() {
        echo "Ingrese el ID del libro: ";
        $id = trim(fgets(STDIN));
    
        $libroEncontrado = false;
        foreach ($this->libros as $libro) {
            if ($libro->getId() === $id) {
                echo "Información del libro:\n";
                echo $libro . "\n";
                $libroEncontrado = true;
                break;
            }
        }
    
        if (!$libroEncontrado) {
            echo "Libro no encontrado.\n";
        }
    }
    
    private function realizarPrestamo() {
        echo "Ingrese el ID del usuario: ";
        $idUsuario = trim(fgets(STDIN));
        echo "Ingrese el ID del libro: ";
        $idLibro = trim(fgets(STDIN));
    
        $usuarioEncontrado = null;
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getId() === $idUsuario) {
                $usuarioEncontrado = $usuario;
                break;
            }
        }
    
        $libroEncontrado = null;
        foreach ($this->libros as $libro) {
            if ($libro->getId() === $idLibro) {
                $libroEncontrado = $libro;
                break;
            }
        }
    
        if ($usuarioEncontrado && $libroEncontrado) {
            $prestamo = new Prestamo($usuarioEncontrado, $libroEncontrado, date("Y-m-d"));
            $this->prestamos[] = $prestamo;
            $this->prestamosActivos[] = $prestamo;
    
            echo "Préstamo realizado con éxito.\n";
        } else {
            echo "Usuario o libro no encontrado.\n";
        }
    }
    
    private function finalizarPrestamo() {
        echo "Ingrese el ID del libro devuelto: ";
        $idLibroDevuelto = trim(fgets(STDIN));
    
        $prestamoEncontrado = null;
        foreach ($this->prestamosActivos as $index => $prestamo) {
            if ($prestamo->getLibro()->getId() === $idLibroDevuelto) {
                $prestamoEncontrado = $prestamo;
                unset($this->prestamosActivos[$index]);
                break;
            }
        }
    
        if ($prestamoEncontrado) {
            echo "Préstamo finalizado con éxito.\n";
        } else {
            echo "Libro no encontrado o no está en préstamo.\n";
        }
    }
    
    private function consultarLibrosDisponibles() {
        echo "Libros disponibles:\n";
        foreach ($this->libros as $libro) {
            echo $libro . "\n";
        }
    }
    
    private function consultarPrestamosActivos() {
        echo "Préstamos activos:\n";
        foreach ($this->prestamosActivos as $prestamo) {
            echo $prestamo . "\n";
        }
    }
    
}

// Ejecución de la aplicación
$biblioteca = new Biblioteca();
$biblioteca->menu();
?>