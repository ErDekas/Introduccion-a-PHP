# Introduccion-a-PHP
Introducción a PHP con proyectos simples con los que aprender PHP
#### Basic PhP Syntax
```php
<?php
    echo "Hello, World!";
?>
```
#### Basic Variables
```php
<?php
        $greeting =
    "Hello, World!";
        echo $greeting;
?>
```
#### PhP Data Type
```php
<?php
    $string = "Hello, World!";
    $int = 42;
    $float = 3.41;
    $var = null;
    $bool = true;
    $array = array("apple", "banana", "cherry");
    echo $int; //Generara el valor del int
?>
```
#### Basic Operations
```php
<?php
    $a = 10;
    $b = 20;

    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    $modulus = $a % $b;
    $power = $a ** $b;

    echo "Sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>";
    echo "Quotient: $quotient<br>";
    echo "Modulus: $modulus<br>";
    echo "Power: $power<br>";
?>
```
#### Condional Statment
```php
<?php
    $number = 10;
    if ($number > 0) {
        echo "$number is positive"
    } elseif ($number < 0) {
        echo "$number is negative"
    } else {
        echo "$number is zero"
    }
?>
```
#### Loops
```php
<?php
    // For Loop
    for ($i = 0; $i < 5; $i++) {
        echo "The number is: $i <br>";
    }
    // While Loop
    $i = 0;
    while ($i < 5) {
        echo "The number is: $i <br>";
        $i++
    }
    // Do-while Loop
    $i = 0;
    do {
        echo "The number is: $i <br>";
        $i++;
    } while ($i < 5);
    // Foreach Loop
    $fruits = array("apple", "banana", "cherry");;
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit <br>";
    }
?>
```
#### Functions
```php
<?php
    function greet($name) {
        return "Hello, $name";
    }

    echo greet("World");
?>
```
#### $GLOBALS
```php
<?php
$x = 10;
$y = 20;

function sum() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

sum();
echo $z; // Generara 30

?>
```
#### $_SERVER
```php
<?php
echo $_SERVER['PHP_SELF'];
// Generara el nombre del archivo en donde se ejecuta el script actual
echo $_SERVER['SERVER_NAME'];
// Generara el nombre del host del servidor
?>
```
#### $_GET
```php
<?php
// URL: https://example.com/index.php?name=John
echo $_GET['name']; // Generara John
?>
```
#### $_POST
```php
<?php
// Asume un formulario con el metodo post y un input llamado name
echo $_POST['name'];
// Generara el valor del input name
?>
```
#### $_COOKIE
```php
<?php
echo $_COOKIE['user']; // Generara el valor de la cookie de user
?>
```
#### $_FILES
```php
<?php
// Asume un formulario con el metodo post y un enctype="multipart/form-data"
echo $_FILES['files']['name'];
// Generara el nombre original del archivo subido
?>
```
#### $_ENV
```php
<?php
echo $_ENV['PATH'];
// Generara la ruta del sistema de la variable de entorno
?>
```
#### $_REQUEST
```php
<?php
// Si el nombre esta configurado en GET, POST o COOKIE
echo $_REQUEST['name'];
// Generara el valor de 'name' de GET, POST o COOKIE
?>
```
#### $_SESSION
```php
<?php
session_start();
$_SESSION['username'] = 'JohnDoe';
echo $_SESSION['username']; // Generara: JohnDoe
?>
```
#### Connecting to a database
```php
<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    // Crear conexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar conexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row['id']. " - Name: " . $row['firstname']. " " . $row['lastname']. "<br>"; 
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
```
