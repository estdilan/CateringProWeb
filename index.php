<?php 
    // 1. Definimos el título de esta página específica
    $titulo = "Inicio - Catering Pro"; 
    
    // 2. Incluimos el Header
    include 'includes/header.php'; 
?>

<!-- AQUI EMPIEZA TU CONTENIDO ÚNICO DE LA HOME -->
    <section class="hero-background" style="background-image: url(img/others/private-party-buffet.png);">
    </section>
    <section class="highlight">
        <div>
            <h2>LO QUE HACEMOS</h2>
        </div>
        <div>
            <p>Imagina una experiencia gastronómica hecha a tu medida, donde cada sabor, textura y aroma celebra tu historia. En Catering Pro, transformamos tu boda, celebración o evento en un festín inolvidable.<br>
            <br>Lo hacemos con el compromiso en cada detalle, desde la impecable presentación de cada plato hasta el servicio que te hará sentir como el anfitrión perfecto.</p>
        </div>
        <div id="preparation-image" style="background-image: url(img/others/preparation-show.jpg);">
        </div>
    </section>
    <section class="contact-bar">
        <p>Realizamos nuestras operaciones en la ciudad de Bogotá, incluyendo sus áreas circundantes.<br>
        <br>Estaremos entusiasmados de orquestar esta sinfonía culinaria para que su única tarea sea vivir y atesorar los mejores momentos.</p>
        <a href="#form" class="contact-btn">PONERSE EN CONTACTO</a>
    </section>
<!-- AQUI TERMINA TU CONTENIDO ÚNICO -->

<?php 
    // 3. Incluimos el Footer
    include 'includes/footer.php'; 
?>