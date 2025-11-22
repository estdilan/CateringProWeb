<?php
// --- 1. Conexión a la base de datos ---
$servername = "localhost";
$username = "root";  //  usuario que uses
$password = "";      // contraseña
$database = "formulario_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// --- 2. Consulta para traer los datos ---
$sql = "SELECT id, nombre, correo, mensaje, fecha, estado FROM contacto ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registros de Formulario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f4f4f9;
    }
    h1 {
      color: #333;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #3e64ff;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1> Registros del Formulario de Cotización</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Mensaje</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Acción</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $color = ($row["estado"] == "pendiente") ? "style='color:red; font-weight:bold;'" : "style='color:green; font-weight:bold;'";

            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["correo"]) . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($row["mensaje"])) . "</td>";
            echo "<td>" . htmlspecialchars($row["fecha"]) . "</td>";
            echo "<td $color>" . htmlspecialchars($row["estado"]) . "</td>";

            if ($row["estado"] == "pendiente") {
                echo "<td>
                        <button onclick='marcarRevisado(".$row["id"].")'>Marcar revisado</button>
                      </td>";
            } else {
                echo "<td>✔</td>";
            }

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7' style='text-align:center;'>No hay registros aún.</td></tr>";
    }
    ?>
</table>
<script>
function marcarRevisado(id) {
    const formData = new FormData();
    formData.append("id", id);

    fetch("marcar_revisado.php", {
        method: "POST",
        body: formData
    })
    .then(r => r.text())
    .then(t => {
        if (t.trim() === "ok") {
            location.reload();
        } else {
            alert("Error al actualizar");
        }
    });
}
</script>

</body>
</html>

</body>
</html>
