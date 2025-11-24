<?php
session_start();
include 'conection.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Buscamos el usuario
    $sql = "SELECT id, username, password FROM admin_users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificamos si la contraseña coincide con la encriptada
        if (password_verify($password, $row['password'])) {

            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = $row['username'];
            header("Location: panel.php");
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Admin</title>
    <link rel="stylesheet" href="../styles.css">
    <style>

        body { background-color: var(--dark-gray); height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-wrapper { width: 100%; max-width: 500px; padding: 1rem; }
        .error-msg { color: red; margin-bottom: 1rem; font-family: var(--font-secondary); }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="form-box">
            <h2 class="section-title-2" style="color: var(--dark-gray);">ACCESO ADMIN</h2>
            
            <?php if($error): ?>
                <p class="error-msg"><?php echo $error; ?></p>
            <?php endif; ?>

            <form action="" method="post" class="inputs-container" style="grid-template-columns: 1fr; gap: 1rem;">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn-primary" style="width: 100%; margin-top: 1rem;">ENTRAR</button>
            </form>
            
            <a href="../index.php" style="margin-top: 2rem; color: var(--medium-gray); font-family: var(--font-secondary); font-size: var(--text-xs);">← Volver al sitio web</a>
        </div>
    </div>

</body>
</html>