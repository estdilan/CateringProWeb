<?php
header("Content-Type: application/json");

$conexion = new mysqli("localhost", "root", "", "formulario_db");

if ($conexion->connect_error) {
    echo json_encode(["ok" => false, "msg" => "Error de conexión"]);
    exit;
}

$nombre = $_POST['nombre'] ?? null;
$correo = $_POST['correo'] ?? null;
$comentario = $_POST['comentario'] ?? null;

if (!$nombre || !$comentario) {
    echo json_encode(["ok" => false, "msg" => "Datos incompletos"]);
    exit;
}

$stmt = $conexion->prepare("
    INSERT INTO resenas (nombre, correo, comentario, fecha, estado)
    VALUES (?, ?, ?, NOW(), 'pendiente')
");

$stmt->bind_param("sss", $nombre, $correo, $comentario);

if ($stmt->execute()) {
    echo json_encode(["ok" => true, "msg" => "Tu reseña fue enviada"]);
} else {
    echo json_encode(["ok" => false, "msg" => "Error al guardar"]);
}
?>


