<?php
header('Content-Type: application/json; charset=utf-8');

// 1️⃣ Conexión a tu base de datos existente
$conexion = new mysqli("localhost", "root", "", "formulario_db");

// Verificar conexión
if ($conexion->connect_error) {
  echo json_encode(["ok" => false, "msg" => "Error de conexión: " . $conexion->connect_error]);
  exit;
}

// 2️⃣ Capturar los datos del formulario
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

if (empty($nombre) || empty($correo) || empty($mensaje)) {
  echo json_encode(["ok" => false, "msg" => "Todos los campos son obligatorios"]);
  exit;
}

// 3️⃣ Insertar los datos en la base
$stmt = $conexion->prepare("INSERT INTO contacto (nombre, correo, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
  echo json_encode(["ok" => true, "msg" => "✅ Datos guardados con éxito"]);
} else {
  echo json_encode(["ok" => false, "msg" => "❌ Error al guardar los datos"]);
}

$stmt->close();
$conexion->close();
?>
