<?php
header("Content-Type: application/json");
$conexion = new mysqli("localhost", "root", "", "formulario_db");

if ($conexion->connect_error) {
  echo json_encode([]);
  exit;
}

$res = $conexion->query("SELECT nombre, comentario, DATE_FORMAT(fecha, '%d/%m/%Y %H:%i') AS fecha FROM resenas ORDER BY id DESC");
$rows = [];
while ($r = $res->fetch_assoc()) {
  $rows[] = $r;
}

echo json_encode($rows);
$conexion->close();
?>
