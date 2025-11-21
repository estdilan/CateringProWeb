<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "formulario_db");

$sql = "SELECT id, nombre, comentario, fecha, estado FROM resenas ORDER BY id DESC";
$res = $conn->query($sql);

$data = [];

while ($row = $res->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>


