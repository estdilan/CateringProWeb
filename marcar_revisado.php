<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formulario_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (!isset($_POST['id'])) {
    die("ID no recibido");
}

$id = intval($_POST['id']);

$sql = "UPDATE contacto SET estado='revisado' WHERE id=$id";

if ($conn->query($sql)) {
    echo "ok";
} else {
    echo "error";
}

$conn->close();
?>
