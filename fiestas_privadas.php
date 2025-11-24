<?php 
  $titulo = "Fiestas Privada - Catering Pro"; 
  include 'includes/header.php'; 
?>

<!-- SECCIÓN HERO -->
<!-- Usamos 'img/quince.jpg' como fondo principal por ser impactante -->
<section class="hero" style="background-image: url('assets/img/others/corporate-event-2.jpg');">
  <h1>FIESTAS PRIVADAS</h1>
  <p>Hacemos realidad tus celebraciones con estilo, elegancia y el mejor servicio gastronómico en Bogotá y Cundinamarca.</p>
  <a href="#contacto" class="hero-btn">Cotiza en línea</a>
</section>

<section class="info-card" id="contacto">
  <p>Ofrecemos una experiencia completa que incluye catering, decoración temática, música y logística. Ya sea una fiesta de quince años o una celebración infantil, cuidamos cada detalle.</p>
</section>

<!-- GRID SECTION (Contenido Principal) -->
<section class="grid-section">

  <!-- Ítem 1: Quince Años -->
  <div class="grid-text">
    <h2>FAMILIA Y AMIGOS</h2>
    <p>Creamos celebraciones únicas con catering a la medida, decoración soñada y atención impecable. Ofrecemos menús para jóvenes y adultos, incluyendo opciones vegetarianas, sin gluten y sin azúcar.</p>
  </div>
  <!-- Usamos una imagen representativa aquí -->
  <img src="assets/img/others/cenacorporativa.jpg" alt="Celebración de amigos" class="section-image">

  <!-- Ítem 2: Decoraciones Temáticas -->
  <div class="grid-text">
    <h2>DECORACIÓN Y CATERING</h2>
    <p>Diseñamos espacios con flores, iluminación y mobiliario en perfecta armonía. Incluimos estaciones interactivas (hamburguesas, crepes, sushi), buffets y postres temáticos.</p>
  </div>
  <img src="assets/img/others/finger-foods.jpg" alt="Postres" class="section-image">

  <div class="grid-text">
    <h2>FIESTAS INFANTILES</h2>
    <p>Un catering único pensado para los más pequeños: mini sándwiches, brochetas de frutas, opciones veganas y cupcakes temáticos con o sin azúcar.</p>
  </div>
  <img src="assets/img/others/glass-view.jpg" alt="Copas con vino" class="section-image">

</section>

<!-- INFO CARD 2 (Cierre) -->
<section class="info-card">
  <p>Diseñamos paquetes a la medida para que disfrutes de tu fiesta sin preocupaciones. ¡Separa tu fecha y déjanos sorprenderte!</p>
</section>

<?php 
  include 'includes/form.php'; 
  include 'includes/footer.php'; 
?>