<?php
$host = "localhost";
$user = "root";
$pass = "root"; // Clave por defecto de MAMP
$db   = "maindb"; // El nombre que pusimos en el Paso 1
$port = 8889; // Puerto por defecto de MAMP para MySQL

$conexion = new mysqli($host, $user, $pass, $db, $port);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>