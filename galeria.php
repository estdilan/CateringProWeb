<?php 
    // 1. Definimos el título de esta página específica
    $titulo = "Galeria - Catering Pro"; 
    
    // 2. Incluimos el Header
    include 'includes/header.php'; 
?>

<!-- SECCIÓN HERO (Para mantener consistencia) -->
  <section class="hero" style="background-image: url('assets/img/others/amasijos.png');">
    <h1>GALERÍA</h1>
    <p>Un recorrido visual por nuestros eventos más memorables.</p>
  </section>

  <!-- CARRUSEL DE ANCHO COMPLETO (10 FOTOS) -->
  <div class="swiper galleryCarousel">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide1.jpg" alt="Foto Carrusel 1"></div>
      <!-- Slide 2 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide2.jpg" alt="Foto Carrusel 2"></div>
      <!-- Slide 3 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide3.jpg" alt="Foto Carrusel 3"></div>
      <!-- Slide 4 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide4.jpg" alt="Foto Carrusel 4"></div>
      <!-- Slide 5 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide5.jpg" alt="Foto Carrusel 5"></div>
      <!-- Slide 6 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide6.jpg" alt="Foto Carrusel 6"></div>
      <!-- Slide 7 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide7.jpg" alt="Foto Carrusel 7"></div>
      <!-- Slide 8 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide8.jpg" alt="Foto Carrusel 8"></div>
      <!-- Slide 9 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide9.jpg" alt="Foto Carrusel 9"></div>
      <!-- Slide 10 -->
      <div class="swiper-slide"><img src="assets/img/galeria/slide10.jpg" alt="Foto Carrusel 10"></div>
    </div>
    <!-- Flechas de navegación (opcional) -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- INTRODUCCIÓN PEQUEÑA -->
  <section class="info-card">
    <p>Cada detalle cuenta una historia. Explora nuestra selección de momentos únicos.</p>
  </section>

  <!-- GRILLA DE FOTOS 3x5 (15 FOTOS) -->
  <section class="gallery-grid">
    <!-- Fila 1 -->
    <div class="gallery-item"><img src="assets/img/galeria/foto1.jpg" alt="Galería 1"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto2.jpg" alt="Galería 2"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto3.jpg" alt="Galería 3"></div>
    <!-- Fila 2 -->
    <div class="gallery-item"><img src="assets/img/galeria/foto4.jpg" alt="Galería 4"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto5.jpg" alt="Galería 5"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto6.jpg" alt="Galería 6"></div>
    <!-- Fila 3 -->
    <div class="gallery-item"><img src="assets/img/galeria/foto7.jpg" alt="Galería 7"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto8.jpg" alt="Galería 8"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto9.jpg" alt="Galería 9"></div>
    <!-- Fila 4 -->
    <div class="gallery-item"><img src="assets/img/galeria/foto10.jpg" alt="Galería 10"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto11.jpg" alt="Galería 11"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto12.jpg" alt="Galería 12"></div>
    <!-- Fila 5 -->
    <div class="gallery-item"><img src="assets/img/galeria/foto13.jpg" alt="Galería 13"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto14.jpg" alt="Galería 14"></div>
    <div class="gallery-item"><img src="assets/img/galeria/foto15.jpg" alt="Galería 15"></div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Inicialización del Carrusel -->
<script>
  var swiper = new Swiper(".galleryCarousel", {
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<!-- AQUI TERMINA TU CONTENIDO ÚNICO -->

<?php 
    // 3. Incluimos el Footer
    include 'includes/footer.php'; 
?>