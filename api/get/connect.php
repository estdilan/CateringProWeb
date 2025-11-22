<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formulario_db"; // nombre de tu base de datos en phpMyAdmin

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>
