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
      <div class="swiper-slide"><img src="assets/img/others/breakfast.jpg" alt="Foto Carrusel 1"></div>
      <!-- Slide 2 -->
      <div class="swiper-slide"><img src="assets/img/others/bruce-cake.jpg" alt="Foto Carrusel 2"></div>
      <!-- Slide 3 -->
      <div class="swiper-slide"><img src="assets/img/others/cafe.jpg" alt="Foto Carrusel 3"></div>
      <!-- Slide 4 -->
      <div class="swiper-slide"><img src="assets/img/others/desayunosem.jpg" alt="Foto Carrusel 4"></div>
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
    <?php
      include 'admin/conection.php'; // Conectamos a la BD
      $sql = "SELECT * FROM galeria ORDER BY id DESC"; 
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              // Generamos el HTML dinámicamente
              echo '<div class="gallery-item">
                      <img src="assets/img/galeria/' . $row["nombre_archivo"] . '" alt="Foto Galería">
                    </div>';
          }
      }
    ?>
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