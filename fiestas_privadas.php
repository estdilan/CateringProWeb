<?php 
    // 1. Definimos el título de esta página específica
    $titulo = "Fiestas Privada - Catering Pro"; 
    
    // 2. Incluimos el Header
    include 'includes/header.php'; 
?>

<!-- AQUI EMPIEZA TU CONTENIDO ÚNICO DE LA HOME -->
<section class="hero">
    <h1>Fiestas Privadas</h1>
    <p>Hacemos realidad tus celebraciones con estilo, elegancia y el mejor servicio gastronómico en Bogotá y Cundinamarca.</p>
    <a href="#contacto" class="btn">Cotiza en línea</a>
  </section>

  <!-- QUINCE AÑOS -->
  <section class="banner banner-light">
    <div class="banner-img" style="background-image: url('img/quince.jpg');"></div>
    <div class="banner-text">
      <h2>Fiestas de Quince Años</h2>
      <p>Creamos celebraciones únicas con catering a la medida, decoración soñada, ponqué temático y atención impecable. Menús diseñados para jóvenes y adultos con estaciones interactivas, postres creativos y cenas temáticas.</p>
      <p><strong>¡Llama ya y separa tu fecha!</strong> Ofrecemos opciones vegetarianas, sin gluten y sin azúcar.</p>
      <a href="#contacto" class="btn">Cotiza tu Fiesta</a>
    </div>
  </section>

  <!-- DECORACIONES TEMÁTICAS -->
  <section class="banner banner-dark">
    <div class="banner-text">
      <h2>Decoraciones Temáticas</h2>
      <p>Diseñamos decoraciones personalizadas con elegancia y estilo, cuidando cada detalle: flores, iluminación, mobiliario y colores en perfecta armonía. Contamos con salones y haciendas ideales para tus celebraciones.</p>
      <ul>
        <li>Estaciones interactivas (hamburguesas, crepes, sushi, tacos, etc.)</li>
        <li>Buffets, cenas servidas y snacks divertidos</li>
        <li>Postres y ponqués temáticos</li>
      </ul>
      <a href="#contacto" class="btn">Cotiza tu Fiesta de Quince</a>
    </div>
    <div class="banner-img" style="background-image: url('img/decoracionquince.jpg');"></div>
  </section>

  <!-- DJ -->
  <section class="banner banner-light">
    <div class="banner-img" style="background-image: url('img/djquince.jpg');"></div>
    <div class="banner-text">
      <h2>DJ para Fiestas de Quince</h2>
      <p>Nuestros DJ profesionales y sistemas de sonido premium crearán el ambiente soñado para tu fiesta. Iluminación tipo show, efectos especiales y música personalizada para que cada instante sea inolvidable.</p>
      <a href="#contacto" class="btn">Agenda tu Fiesta Aquí</a>
    </div>
  </section>

  <!-- INFANTILES -->
  <section class="banner banner-dark">
    <div class="banner-text">
      <h2>Fiestas Infantiles</h2>
      <p>Celebramos los cumpleaños de tus hijos con un catering único, pensado especialmente para los más pequeños. Menús divertidos, servicio impecable y decoración temática para una fiesta sin preocupaciones.</p>
      <ul>
        <li>Mini sándwiches divertidos</li>
        <li>Bandejas de frutas y verduras coloridas</li>
        <li>Opciones sin gluten o veganas</li>
        <li>Cupcakes temáticos con y sin azúcar</li>
      </ul>
      <a href="#contacto" class="btn">Conoce Nuestros Paquetes</a>
    </div>
    <div class="banner-img" style="background-image: url('img/fiestainfantil.jpg');"></div>
  </section>

  <!-- DECORACIONES Y ALQUILERES -->
  <section class="banner banner-light">
    <div class="banner-img" style="background-image: url('img/decoracioninfantil.jpg');"></div>
    <div class="banner-text">
      <h2>Decoraciones y Alquileres</h2>
      <p>Ofrecemos alquiler de mesas, sillas, mantelería y decoración temática. Diseñamos y montamos cada espacio para crear ambientes únicos que reflejan la temática y estilo de tu celebración.</p>
      <a href="#contacto" class="btn">Click aquí para Conocer los Paquetes</a>
    </div>
  </section>
<!-- AQUI TERMINA TU CONTENIDO ÚNICO -->

<?php 
    include 'includes/form.php'; 
    // 3. Incluimos el Footer
    include 'includes/footer.php'; 
?>