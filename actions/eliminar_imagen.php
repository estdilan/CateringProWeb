<?php
$cn = new mysqli("localhost", "root", "", "formulario_db");

$id = $_POST["id"];

// Buscar filename
$res = $cn->query("SELECT filename FROM galeria WHERE id = $id");
$data = $res->fetch_assoc();

if ($data) {
    $file = "uploads/galeria/" . $data["filename"];

    if (file_exists($file)) {
        unlink($file); // eliminar archivo
    }

    // eliminar registro
    $cn->query("DELETE FROM galeria WHERE id = $id");
}

header("Location: admin_galeria.php");
exit;
