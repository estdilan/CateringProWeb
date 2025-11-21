<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Acceso administrador</h2>

<form action="validar_login.php" method="POST">
    <input type="text" name="usuario" required>
    <input type="password" name="password"  required>
    <button type="submit">Ingresar</button>
</form>

</body>
</html>
