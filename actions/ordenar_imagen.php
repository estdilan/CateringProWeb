<?php
$cn = new mysqli("localhost", "root", "", "formulario_db");

$id = intval($_POST["id"]);
$orden = intval($_POST["orden"]);

$cn->query("UPDATE galeria SET orden = $orden WHERE id = $id");

header("Location: admin_panel.php");
?>
