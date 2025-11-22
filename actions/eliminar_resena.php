<?php
include '../conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM resenas WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 'ok';
} else {
    echo 'error';
}
?>
