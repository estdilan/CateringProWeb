<?php
$host = "localhost";
$user = "root";
$pass = "root"; // En MAMP la contraseña suele ser 'root', en XAMPP es vacía ""
$db   = "cateringprodb"; 

// IMPORTANTE: Aquí se define la variable $conn
$conn = new mysqli($host, $user, $pass, $db); 

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>