<?php

$url = "mysql:host=localhost;port=4000;dbname=empleados";
$user = "root";
$password = "MANAGER";

$empleadosFile = "./src/empleados.txt";
$departamentosFile = "./src/departamentos.txt";
$deptEmpFile = "./src/dept_emp.txt";
$deptManagerFile = "./src/dept_manager.txt";
$salariosFile = "./src/salarios.txt";
$titulosFile = "./src/titulos.txt";

try {
    $conexion = new PDO($url, $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    migrarEmpleados($conexion, $empleadosFile);
    migrarDepartamentos($conexion, $departamentosFile);
    migrarDeptEmp($conexion, $deptEmpFile);
    migrarDeptManager($conexion, $deptManagerFile);
    migrarSalarios($conexion, $salariosFile);
    migrarTitulos($conexion, $titulosFile);

    $conexion->commit();
    $conexion = null;

    echo "Migración completada con éxito.";
} catch (PDOException $e) {
    echo "Error de SQL: " . $e->getMessage();
}

function migrarEmpleados($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO empleados VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo de empleados: " . $e->getMessage();
    }
}

function migrarDepartamentos($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO departamentos VALUES (?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo de departamentos: " . $e->getMessage();
    }
}

function migrarDeptEmp($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO dept_emp VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo dept_emp: " . $e->getMessage();
    }
}

function migrarDeptManager($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO dept_manager VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo dept_manager: " . $e->getMessage();
    }
}

function migrarSalarios($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO salarios VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo salarios: " . $e->getMessage();
    }
}

function migrarTitulos($conexion, $fileName) {
    try {
        $handle = fopen($fileName, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode(";", $line);
                $query = "INSERT INTO titulos VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($query);
                $stmt->execute($data);
            }
            fclose($handle);
        }
    } catch (Exception $e) {
        echo "Error al leer el archivo titulos: " . $e->getMessage();
    }
}

?>
