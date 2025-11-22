<?php
$conn = new mysqli("localhost", "root", "", "formulario_db");

$query = "SELECT * FROM galeria ORDER BY orden ASC, id DESC";
$result = $conn->query($query);

$imagenes = [];

while ($row = $result->fetch_assoc()) {
    $imagenes[] = $row;
}

echo json_encode($imagenes);
?>

