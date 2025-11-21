<?php
session_start();

$cn = new mysqli("localhost", "root", "", "formulario_db");

$usuario = $_POST['usuario'] ?? '';
$pass = $_POST['password'] ?? '';

$stmt = $cn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($pass, $row['password'])) {
        $_SESSION['admin'] = $row['usuario'];
        header("Location: admin_panel.php");
        exit;
    }
}

echo "Usuario o contraseña incorrectos";



