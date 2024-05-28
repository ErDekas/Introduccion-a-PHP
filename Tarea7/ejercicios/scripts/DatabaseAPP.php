<?php

$url = "jdbc:mariadb://localhost:4000/empleados";
$user = "root";
$password = "MANAGER";

try {
    $conexion = new PDO($url, $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conexion->prepare("");

    $scanner = fopen("php://stdin", "r");

    while (true) {
        echo "Seleccione una opción:\n";
        echo "1. Modificar base de datos (sentencia SQL personalizada)\n";
        echo "2. Consultas preestablecidas\n";
        echo "3. Consulta personalizada\n";
        echo "4. Salir\n";

        $opcion = intval(trim(fgets($scanner)));

        switch ($opcion) {
            case 1:
                echo "Ingrese la sentencia SQL para modificar la base de datos:\n";
                $sqlModificar = trim(fgets($scanner));
                try {
                    $statement->execute($sqlModificar);
                    echo "La modificación se ha realizado con éxito.\n";
                } catch (PDOException $e) {
                    echo "Error al ejecutar la modificación: " . $e->getMessage() . "\n";
                }
                break;
            case 2:
                ejecutarConsultasPreestablecidas($statement);
                break;
            case 3:
                echo "Ingrese la sentencia SQL para la consulta personalizada:\n";
                $sqlPersonalizada = trim(fgets($scanner));
                ejecutarConsultaPersonalizada($statement, $sqlPersonalizada);
                break;
            case 4:
                echo "Saliendo...\n";
                exit();
            default:
                echo "Opción inválida.\n";
        }
    }
} catch (PDOException $e) {
    echo "Error de SQL: " . $e->getMessage() . "\n";
}

function ejecutarConsultasPreestablecidas($statement) {
    $consultas = [
        "SELECT * FROM empleados WHERE genero = 'M'",
        "SELECT * FROM empleados WHERE genero = 'F'",
        "SELECT nombre, apellidos FROM empleados WHERE fecha_alta > '2000-01-01'",
        "SELECT d.nombre_departamento, COUNT(e.id_emp) FROM empleados e JOIN dept_emp de ON e.id_emp = de.id_emp JOIN departamentos d ON de.id_dep = d.id_dep GROUP BY d.nombre_departamento",
        "SELECT e.nombre, e.apellidos, s.salario FROM empleados e JOIN salarios s ON e.id_emp = s.id_emp WHERE s.salario > 60000"
    ];

    echo "Seleccione una consulta preestablecida:\n";
    foreach ($consultas as $key => $consulta) {
        echo ($key + 1) . ". " . $consulta . "\n";
    }

    $opcionConsulta = intval(trim(fgets($GLOBALS['scanner'])));

    if ($opcionConsulta < 1 || $opcionConsulta > count($consultas)) {
        echo "Opción inválida.\n";
        return;
    }

    $consulta = $consultas[$opcionConsulta - 1];
    $resultSet = $statement->executeQuery($consulta);
    $metaData = $resultSet->getMetaData();
    $columnCount = $metaData->getColumnCount();

    while ($resultSet->next()) {
        for ($i = 1; $i <= $columnCount; $i++) {
            echo $metaData->getColumnName($i) . ": " . $resultSet->getString($i) . " ";
        }
        echo "\n";
    }
}

function ejecutarConsultaPersonalizada($statement, $sqlPersonalizada) {
    try {
        $resultSet = $statement->executeQuery($sqlPersonalizada);
        $metaData = $resultSet->getMetaData();
        $columnCount = $metaData->getColumnCount();

        while ($resultSet->next()) {
            for ($i = 1; $i <= $columnCount; $i++) {
                echo $metaData->getColumnName($i) . ": " . $resultSet->getString($i) . " ";
            }
            echo "\n";
        }
    } catch (SQLException $e) {
        echo "Error de SQL: " . $e->getMessage() . "\n";
    }
}

?>
