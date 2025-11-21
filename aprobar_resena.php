<?php
include '../conexion.php';

$id = $_POST['id'];

$sql = "UPDATE resenas SET estado = 'aprobado' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 'ok';
} else {
    echo 'error';
}
?>
