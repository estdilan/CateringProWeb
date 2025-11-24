<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
include 'conection.php';

// --- LÓGICA PARA SUBIR FOTO ---
if (isset($_POST['subir_foto'])) {
    $target_dir = "../assets/img/galeria/"; // Asegúrate que esta carpeta exista
    $archivo_nombre = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $archivo_nombre;
    
    // Mover archivo a la carpeta
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Guardar en BD
        $sql = "INSERT INTO galeria (nombre_archivo) VALUES ('$archivo_nombre')";
        $conn->query($sql);
    }
}

// --- LÓGICA PARA BORRAR FOTO ---
if (isset($_GET['borrar'])) {
    $id = $_GET['borrar'];
    // Primero obtenemos el nombre para borrar el archivo físico
    $result = $conn->query("SELECT nombre_archivo FROM galeria WHERE id=$id");
    $row = $result->fetch_assoc();
    unlink("../assets/img/galeria/" . $row['nombre_archivo']); // Borra archivo de carpeta
    
    // Borra de BD
    $conn->query("DELETE FROM galeria WHERE id=$id");
    header("Location: panel.php"); // Recargar
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <!-- Vinculamos tu CSS principal para que se vea igual al sitio -->
    <link rel="stylesheet" href="../styles.css">
    <style>
        /* Estilos extra solo para el admin */
        .admin-container { padding: 5rem 10%; background: #f9f9f9; min-height: 100vh; }
        .admin-section { background: white; padding: 2rem; margin-bottom: 3rem; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        
        /* Tabla de mensajes */
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #ddd; font-family: var(--font-secondary); font-size: 0.9rem; }
        th { background-color: var(--dark-gray); color: white; }
        
        /* Mini galería admin */
        .admin-gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 1rem; margin-top: 1rem; }
        .admin-img-card { position: relative; height: 150px; }
        .admin-img-card img { width: 100%; height: 100%; object-fit: cover; }
        .btn-delete {
            position: absolute; top: 5px; right: 5px;
            background: red; color: white; border: none; padding: 5px 10px; cursor: pointer; font-size: 0.8rem;
        }
        .upload-box { border: 2px dashed var(--medium-gray); padding: 2rem; text-align: center; margin-bottom: 1rem; }
    </style>
</head>
<body>

    <header>
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 0 2rem;">
            <h1><a href="../index.php" style="color:black; text-decoration: none;">ADMIN PANEL</a></h1>
            <!-- Botón de Logout -->
            <a href="logout.php" style="color: black; font-family: sans-serif;">Cerrar Sesión</a>
        </div>
    </header>

    <div class="admin-container">
        
        <!-- SECCIÓN 1: MENSAJES DE CONTACTO -->
        <div class="admin-section">
            <h2 class="section-title-2" style="font-size: 2rem; color: var(--dark-gray);">Mensajes Recibidos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM contactos ORDER BY fecha DESC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["fecha"] . "</td>
                                    <td>" . $row["nombre"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["telefono"] . "</td>
                                    <td>" . $row["mensaje"] . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay mensajes aún</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- SECCIÓN 2: ADMINISTRAR GALERÍA -->
        <div class="admin-section">
            <h2 class="section-title-2" style="font-size: 2rem; color: var(--dark-gray);">Galería de Fotos</h2>
            
            <!-- Formulario subir foto -->
            <form action="" method="post" enctype="multipart/form-data" class="upload-box">
                <p style="margin-bottom: 1rem; font-family: var(--font-secondary);">Subir nueva imagen:</p>
                <input type="file" name="fileToUpload" required>
                <button type="submit" name="subir_foto" class="btn-primary" style="margin-top:1rem;">Subir Foto</button>
            </form>

            <!-- Ver fotos existentes -->
            <div class="admin-gallery">
                <?php
                $sql = "SELECT * FROM galeria ORDER BY id DESC"; // Las más nuevas primero
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="admin-img-card">
                                <img src="../assets/img/galeria/' . $row["nombre_archivo"] . '">
                                <a href="panel.php?borrar=' . $row["id"] . '" class="btn-delete" onclick="return confirm(\'¿Seguro que quieres borrarla?\')">X</a>
                              </div>';
                    }
                }
                ?>
            </div>
        </div>

    </div>

</body>
</html>