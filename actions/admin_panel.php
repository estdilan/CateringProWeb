<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Crear conexión UNA VEZ para todo
$cn = new mysqli("localhost", "root", "", "formulario_db");
if ($cn->connect_error) {
    die("Error de conexión: " . $cn->connect_error);
}

// Acciones de reseñas (aprobar/rechazar)
if (isset($_POST['accion']) && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $accion = $_POST['accion'];

    if ($accion === "aprobar") {
        $cn->query("UPDATE resenas SET estado='aprobada' WHERE id=$id");
    }
    if ($accion === "rechazar") {
        $cn->query("UPDATE resenas SET estado='rechazada' WHERE id=$id");
    }

    header("Location: admin_panel.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
</head>
<body>

<h1>Panel de Administración</h1>
<a href="logout.php">Cerrar sesión</a>

<!-- =====================================================
        SECCIÓN 1 – SUBIR IMAGEN
===================================================== -->
<h2>Subir Imagen</h2>

<form action="subir_imagen.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="imagen" required>
    <button type="submit">Subir</button>
</form>

<hr>

<!-- =====================================================
        SECCIÓN 2 – GALERÍA
===================================================== -->
<h2>Imágenes actuales</h2>

<?php
$res = $cn->query("SELECT * FROM galeria ORDER BY orden ASC");

while ($row = $res->fetch_assoc()) {
    echo "<div style='margin:10px 0; padding:10px; border:1px solid #ddd'>";

    // La imagen
    echo "<img src='uploads/galeria/".$row['filename']."' width='200'><br><br>";

    // Botón eliminar
    echo "<form action='eliminar_imagen.php' method='POST' style='display:inline-block; margin-right:10px'>";
    echo "<input type='hidden' name='id' value='".$row['id']."'>";
    echo "<button type='submit'>Eliminar</button>";
    echo "</form>";

    // Formulario para cambiar orden
    echo "<form action='ordenar_imagen.php' method='POST' style='display:inline-block'>";
    echo "<input type='hidden' name='id' value='".$row['id']."'>";
    echo "<input type='number' name='orden' value='".$row['orden']."' style='width:60px'>";
    echo "<button type='submit'>Actualizar orden</button>";
    echo "</form>";

    echo "</div>";
}
?>
<hr>

<!-- =====================================================
        SECCIÓN 3 – RESEÑAS PENDIENTES
===================================================== -->
<h2>Reseñas Pendientes</h2>

<?php
$resenas = $cn->query("SELECT * FROM resenas WHERE estado='pendiente' ORDER BY fecha DESC");

if ($resenas->num_rows === 0) {
    echo "<p>No hay reseñas pendientes.</p>";
} else {
    while ($r = $resenas->fetch_assoc()) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin:10px 0'>";
        echo "<h3>".$r['nombre']."</h3>";
        echo "<p>".$r['comentario']."</p>";
        echo "<small>".$r['fecha']."</small><br><br>";

        echo "<form method='POST' style='display:inline'>";
        echo "<input type='hidden' name='id' value='".$r['id']."'>";
        echo "<input type='hidden' name='accion' value='aprobar'>";
        echo "<button type='submit'>Aprobar</button>";
        echo "</form>";

        echo " ";

        echo "<form method='POST' style='display:inline'>";
        echo "<input type='hidden' name='id' value='".$r['id']."'>";
        echo "<input type='hidden' name='accion' value='rechazar'>";
        echo "<button type='submit'>Rechazar</button>";
        echo "</form>";

        echo "</div>";
    }
}
?>
<hr>
<hr>

<!-- =====================================================
        SECCIÓN 4 – FORMULARIOS DE COTIZACIÓN
===================================================== -->
<h2>Formularios de Cotización</h2>

<?php

// ACCIONES: revisar o eliminar mensaje
if (isset($_POST['accion_contacto']) && isset($_POST['id_contacto'])) {
    $id = intval($_POST['id_contacto']);
    $accion = $_POST['accion_contacto'];

    if ($accion === "revisado") {
        $cn->query("UPDATE contacto SET estado='revisado' WHERE id=$id");
    }

    if ($accion === "eliminar") {
        $cn->query("DELETE FROM contacto WHERE id=$id");
    }

    header("Location: admin_panel.php");
    exit;
}

// Traer los formularios desde la tabla contacto
$formularios = $cn->query("SELECT * FROM contacto ORDER BY id DESC");

if ($formularios->num_rows === 0) {
    echo "<p>No hay mensajes de cotización.</p>";
} else {
    echo "<table border='1' cellpadding='8' cellspacing='0' style='margin-top:10px; background:#fff'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>";

    while ($f = $formularios->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$f['id']."</td>";
        echo "<td>".htmlspecialchars($f['nombre'])."</td>";
        echo "<td>".htmlspecialchars($f['correo'])."</td>";
        echo "<td>".nl2br(htmlspecialchars($f['mensaje']))."</td>";
        echo "<td>".$f['fecha']."</td>";

        // Estado
        $color = $f['estado'] === "revisado" ? "green" : "red";
        echo "<td style='color:$color; font-weight:bold;'>".$f['estado']."</td>";

        // Botones
        echo "<td>";

        // Botón marcar como revisado
        if ($f['estado'] !== "revisado") {
            echo "<form method='POST' style='display:inline'>";
            echo "<input type='hidden' name='id_contacto' value='".$f['id']."'>";
            echo "<input type='hidden' name='accion_contacto' value='revisado'>";
            echo "<button type='submit'>Marcar revisado</button>";
            echo "</form> ";
        }

        // Botón eliminar
        echo "<form method='POST' style='display:inline'>";
        echo "<input type='hidden' name='id_contacto' value='".$f['id']."'>";
        echo "<input type='hidden' name='accion_contacto' value='eliminar'>";
        echo "<button type='submit'>Eliminar</button>";
        echo "</form>";

        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>


