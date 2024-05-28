<?php
/**
 * Clase Monstruo
 * 
 * Clase que representa un monstruo con atributos como nombre, posición en la pantalla, color y estado de vida.
 */
class Monstruo {
    public const MIN_POSICION_X = 0;
    public const MAX_POSICION_X = 80;
    public const MIN_POSICION_Y = 0;
    public const MAX_POSICION_Y = 60;

    private static $numMonstruosTotales = 0;
    private static $numMonstruosVivos = 0;

    private $nombre;
    private $posicionX;
    private $posicionY;
    private $color;
    private $vivo;

    /**
     * Constructor con parámetros
     *
     * @param string $nombre
     * @param int $posicionX
     * @param int $posicionY
     * @param string $color
     */
    public function __construct($nombre = "Sin nombre", $posicionX = 0, $posicionY = 0, $color = "rojo") {
        $this->nombre = $nombre;
        $this->posicionX = $this->validarPosicion($posicionX, self::MIN_POSICION_X, self::MAX_POSICION_X);
        $this->posicionY = $this->validarPosicion($posicionY, self::MIN_POSICION_Y, self::MAX_POSICION_Y);
        $this->color = $color;
        $this->vivo = true;
        
        self::$numMonstruosTotales++;
        self::$numMonstruosVivos++;
    }

    /**
     * Valida que la posición esté dentro de los límites permitidos.
     *
     * @param int $posicion
     * @param int $min
     * @param int $max
     * @return int
     */
    private function validarPosicion($posicion, $min, $max) {
        return max($min, min($max, $posicion));
    }

    // Métodos getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getPosicionX() {
        return $this->posicionX;
    }

    public function getPosicionY() {
        return $this->posicionY;
    }

    public function getColor() {
        return $this->color;
    }

    public function isVivo() {
        return $this->vivo;
    }

    public static function getNumMonstruosTotales() {
        return self::$numMonstruosTotales;
    }

    public static function getNumMonstruosVivos() {
        return self::$numMonstruosVivos;
    }

    // Métodos setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPosicionX($posicionX) {
        $this->posicionX = $this->validarPosicion($posicionX, self::MIN_POSICION_X, self::MAX_POSICION_X);
    }

    public function setPosicionY($posicionY) {
        $this->posicionY = $this->validarPosicion($posicionY, self::MIN_POSICION_Y, self::MAX_POSICION_Y);
    }

    public function setColor($color) {
        $this->color = $color;
    }

    /**
     * Método para matar al monstruo
     */
    public function muere() {
        if ($this->vivo) {
            $this->vivo = false;
            self::$numMonstruosVivos--;
        }
    }

    /**
     * Método para desplazar al monstruo
     *
     * @param int $unidadesX
     * @param int $unidadesY
     * @param bool $derecha
     * @param bool $arriba
     */
    public function desplazarse($unidadesX, $unidadesY, $derecha, $arriba) {
        $this->posicionX += $derecha ? $unidadesX : -$unidadesX;
        $this->posicionY += $arriba ? $unidadesY : -$unidadesY;

        $this->posicionX = $this->validarPosicion($this->posicionX, self::MIN_POSICION_X, self::MAX_POSICION_X);
        $this->posicionY = $this->validarPosicion($this->posicionY, self::MIN_POSICION_Y, self::MAX_POSICION_Y);
    }

    /**
     * Método toString para representar al monstruo como cadena
     *
     * @return string
     */
    public function __toString() {
        $estado = $this->vivo ? "vivo" : "muerto";
        return "El monstruo {$this->nombre} está en la posición ({$this->posicionX}, {$this->posicionY}), es de color {$this->color} y está {$estado}.";
    }
}

// Enumerado de colores
class Colores {
    const BLANCO = "blanco";
    const ROSA = "rosa";
    const AMARILLO = "amarillo";
    const ROJO = "rojo";
    const AZUL = "azul";
    const VERDE = "verde";
}

/**
 * Clase para probar la funcionalidad de la clase Monstruo
 */
class PruebaMonstruo {
    private $monstruos = [];

    public function __construct() {
        $this->monstruos = array_fill(0, 10, null);
    }

    public function menu() {
        do {
            echo "Configuración de Monstruos.\n";
            echo "================================\n";
            echo "   1.- Crear un nuevo monstruo sin datos.\n";
            echo "   2.- Crear una nuevo monstruo con datos conocidos.\n";
            echo "   3.- Asignar nombre a un monstruo.\n";
            echo "   4.- Asignar posición X a un monstruo.\n";
            echo "   5.- Asignar posición Y a un monstruo.\n";
            echo "   6.- Asignar color a un monstruo.\n";
            echo "   7.- Matar un monstruo.\n";
            echo "   8.- Mostrar por pantalla los datos de un monstruo.\n";
            echo "   0.- Salir de la aplicación.\n";
            echo "================================\n";
            echo "  Introduzca la opción elegida: ";
            $opcion = trim(fgets(STDIN));

            switch ($opcion) {
                case '1':
                    $this->crearMonstruoSinDatos();
                    break;
                case '2':
                    $this->crearMonstruoConDatos();
                    break;
                case '3':
                    $this->asignarNombre();
                    break;
                case '4':
                    $this->asignarPosicionX();
                    break;
                case '5':
                    $this->asignarPosicionY();
                    break;
                case '6':
                    $this->asignarColor();
                    break;
                case '7':
                    $this->matarMonstruo();
                    break;
                case '8':
                    $this->mostrarDatosMonstruo();
                    break;
                case '0':
                    echo "Saliendo de la aplicación...\n";
                    break;
                default:
                    echo "Opción no válida. Intente de nuevo.\n";
            }
        } while ($opcion != '0');

        $this->mostrarEstadisticas();
    }

    private function crearMonstruoSinDatos() {
        for ($i = 0; $i < count($this->monstruos); $i++) {
            if ($this->monstruos[$i] === null) {
                $this->monstruos[$i] = new Monstruo();
                echo "Monstruo creado en la posición {$i}.\n";
                return;
            }
        }
        echo "No hay espacio para crear más monstruos.\n";
    }

    private function crearMonstruoConDatos() {
        for ($i = 0; $i < count($this->monstruos); $i++) {
            if ($this->monstruos[$i] === null) {
                echo "Introduce el nombre del monstruo: ";
                $nombre = trim(fgets(STDIN));
                echo "Introduce la posición X del monstruo: ";
                $posicionX = (int)trim(fgets(STDIN));
                echo "Introduce la posición Y del monstruo: ";
                $posicionY = (int)trim(fgets(STDIN));
                echo "Introduce el color del monstruo: ";
                $color = trim(fgets(STDIN));
                $this->monstruos[$i] = new Monstruo($nombre, $posicionX, $posicionY, $color);
                echo "Monstruo creado en la posición {$i}.\n";
                return;
            }
        }
        echo "No hay espacio para crear más monstruos.\n";
    }

    private function asignarNombre() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            echo "Introduce el nuevo nombre del monstruo: ";
            $nombre = trim(fgets(STDIN));
            $monstruo->setNombre($nombre);
            echo "Nombre asignado.\n";
        }
    }

    private function asignarPosicionX() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            echo "Introduce la nueva posición X del monstruo: ";
            $posicionX = (int)trim(fgets(STDIN));
            $monstruo->setPosicionX($posicionX);
            echo "Posición X asignada.\n";
        }
    }

    private function asignarPosicionY() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            echo "Introduce la nueva posición Y del monstruo: ";
            $posicionY = (int)trim(fgets(STDIN));
            $monstruo->setPosicionY($posicionY);
            echo "Posición Y asignada.\n";
        }
    }

    private function asignarColor() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            echo "Introduce el nuevo color del monstruo: ";
            $color = trim(fgets(STDIN));
            $monstruo->setColor($color);
            echo "Color asignado.\n";
        }
    }

    private function matarMonstruo() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            $monstruo->muere();
            echo "Monstruo ha sido eliminado.\n";
        }
    }

    private function mostrarDatosMonstruo() {
        $monstruo = $this->seleccionarMonstruo();
        if ($monstruo) {
            echo $monstruo->__toString() . "\n";
        }
    }

    private function seleccionarMonstruo() {
        echo "Seleccione el índice del monstruo (0-9): ";
        $indice = (int)trim(fgets(STDIN));
        if ($indice >= 0 && $indice < count($this->monstruos) && $this->monstruos[$indice] !== null) {
            return $this->monstruos[$indice];
        } else {
            echo "Índice no válido o monstruo no existente.\n";
            return null;
        }
    }

    private function mostrarEstadisticas() {
        echo "Número total de monstruos creados: " . Monstruo::getNumMonstruosTotales() . "\n";
        echo "Número total de monstruos vivos: " . Monstruo::getNumMonstruosVivos() . "\n";
    }
}

// Ejecución de la prueba
$prueba = new PruebaMonstruo();
$prueba->menu();
?>
