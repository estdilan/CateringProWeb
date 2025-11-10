<?php
header("Content-Type: application/json");
$conexion = new mysqli("localhost", "root", "", "formulario_db");

if ($conexion->connect_error) {
  echo json_encode(["ok" => false, "msg" => "Error de conexión"]);
  exit;
}

$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$comentario = $_POST['comentario'] ?? '';

if (empty($nombre) || empty($comentario)) {
  echo json_encode(["ok" => false, "msg" => "Nombre y comentario son obligatorios"]);
  exit;
}

$stmt = $conexion->prepare("INSERT INTO resenas (nombre, correo, comentario, fecha) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sss", $nombre, $correo, $comentario);

if ($stmt->execute()) {
  echo json_encode(["ok" => true, "msg" => "Reseña guardada con éxito"]);
} else {
  echo json_encode(["ok" => false, "msg" => "Error al guardar"]);
}

$stmt->close();
$conexion->close();
?>
