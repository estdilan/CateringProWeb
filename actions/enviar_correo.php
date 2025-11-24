<?php
include '../admin/conection.php';

$redirect_url = "../index.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_input   = $conn->real_escape_string($_POST['nombre']);
    $apellido_input = $conn->real_escape_string($_POST['apellido']);
    $email          = $conn->real_escape_string($_POST['email']);
    $telefono       = $conn->real_escape_string($_POST['telefono']);
    $mensaje        = $conn->real_escape_string($_POST['mensaje']);

    $nombre_completo = $nombre_input . " " . $apellido_input;

    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje) 
            VALUES ('$nombre_completo', '$email', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        // ÉXITO: Redirigimos con variable status=success
        header("Location: " . $redirect_url . "?status=success#form");
        exit();
    } else {
        // ERROR DE BD: Redirigimos con variable status=error
        header("Location: " . $redirect_url . "?status=error#form");
        exit();
    }

} else {
    // ACCESO DIRECTO NO PERMITIDO
    header("Location: " . $redirect_url);
    exit();
}
?>