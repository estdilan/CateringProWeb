<?php 
    $titulo = "Inicio - Catering Pro"; 
    include 'includes/header.php'; 
?>

    <section class="hero" style="background-image: url('assets/img/others/private-party-buffet.png');">
    </section>

    <!-- 2. SECCIÓN "LO QUE HACEMOS" (Grid de 2 columnas) -->
    <section class="grid-section">
        <!-- Columna Izquierda: Texto -->
        <div class="grid-text">
            <h2 class="section-title">LO QUE HACEMOS</h2>
            <p>Imagina una experiencia gastronómica hecha a tu medida, donde cada sabor, textura y aroma celebra tu historia. En Catering Pro, transformamos tu boda, celebración o evento en un festín inolvidable.<br>
            <br>Lo hacemos con el compromiso en cada detalle, desde la impecable presentación de cada plato hasta el servicio que te hará sentir como el anfitrión perfecto.</p>
        </div>

        <!-- Columna Derecha: Imagen -->
        <!-- Cambiamos el div por img para usar la clase .section-image correctamente -->
        <img src="assets/img/others/preparation-show.jpg" alt="Preparación de eventos" class="section-image">
    </section>

    <!-- 3. BARRA DE CONTACTO (Ahora usa el estilo .info-card) -->
    <section class="info-card">
        <p>Realizamos nuestras operaciones en la ciudad de Bogotá, incluyendo sus áreas circundantes.<br>
        <br>Estaremos entusiasmados de orquestar esta sinfonía culinaria para que su única tarea sea vivir y atesorar los mejores momentos.</p>
    </section>

<?php 
    include 'includes/footer.php'; 
?>