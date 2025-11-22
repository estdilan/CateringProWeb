<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>GALERÍA - RESEÑAS</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="Galerias.css">
  <link rel="stylesheet" href="Reseñas.css">
</head>

<body>

<!-- CARRUSEL -->
<div class="carrusel">
    <button class="prev">‹</button>

    <div id="slides" class="slides"></div>

    <button class="next">›</button>
</div>

<!-- FORMULARIO PARA RESEÑA -->
<section class="form-resena">
  <h2>Deja tu reseña</h2>
  <form id="formResena">
      <input type="text" name="nombre" placeholder="Tu nombre*" required>
      <input type="email" name="correo" placeholder="Tu correo (opcional)">
      <textarea name="comentario" placeholder="Tu comentario*" required></textarea>
      <button type="submit">Enviar</button>
  </form>
  <p id="msgResena"></p>
</section>

<!-- LISTADO -->
<section class="lista-resenas">
  <h2>Reseñas de clientes</h2>
  <div id="resenasContainer"></div>
</section>

<script src="script_galeria_resenas.js"></script>
</body>
</html>


