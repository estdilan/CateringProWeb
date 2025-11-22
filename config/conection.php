<?php
$host = 'localhost';
$usuario = 'root';      // En MAMP el usuario es root
$password = 'root';     // IMPORTANTE: En MAMP la contraseña es 'root' (en XAMPP suele estar vacía)
$base_datos = 'nombre_de_tu_bd';
$puerto = 8889;         // MAMP usa el puerto 8889 para MySQL por defecto

// Ejemplo de conexión con mysqli
$conexion = new mysqli($host, $usuario, $password, $base_datos, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>