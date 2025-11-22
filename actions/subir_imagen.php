<?php
$cn = new mysqli("localhost", "root", "", "formulario_db");

$archivo = $_FILES["imagen"];
$original = $archivo["name"];

// limpiar el nombre
$limpio = preg_replace('/[^A-Za-z0-9.\-_]/', '_', $original);

$nombre = time() . "_" . $limpio;

$nombre = time() . "_" . $archivo["name"];

move_uploaded_file($archivo["tmp_name"], "uploads/galeria/" . $nombre);

$cn->query("INSERT INTO galeria (filename, orden, fecha) VALUES ('$nombre', 0, NOW())");

header("Location: admin_galeria.php");

