<?php
header("Content-Type: application/json");

// 1. Conexión
$conn = new mysqli("localhost", "root", "", "formulario_db");
if ($conn->connect_error) {
  echo json_encode([]);
  exit;
}

// 2. Consulta
$sql = "SELECT id, nombre, comentario, fecha FROM resenas ORDER BY id DESC";
$result = $conn->query($sql);

$resenas = [];

while ($row = $result->fetch_assoc()) {
  $resenas[] = $row;
}

echo json_encode($resenas);
$conn->close();
?>

