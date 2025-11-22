<?php 
    // 1. Definimos el título de esta página específica
    $titulo = "Eventos corporativos - Catering Pro"; 
    
    // 2. Incluimos el Header
    include 'includes/header.php'; 
?>

<!-- AQUI EMPIEZA TU CONTENIDO ÚNICO DE LA HOME -->
<!-- HERO -->
  <section class="hero" data-aos="fade-up">
    <h1>Eventos Corporativos</h1>
    <p>Servicios de catering y organización diseñados para empresas que buscan excelencia, puntualidad y sabor en cada evento.</p>
    <a href="#contacto" class="btn">Cotiza en línea</a>
  </section>

  <!-- CARRUSEL -->
  <div class="swiper mySwiper" data-aos="fade-up">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/others/estacióndecafé.jpg" alt="Estaciones de café"></div>
      <div class="swiper-slide"><img src="img/others/refrigerios.jpg" alt="Refrigerios empresariales"></div>
      <div class="swiper-slide"><img src="img/others/desayunos.jpg" alt="Desayunos de trabajo"></div>
      <div class="swiper-slide"><img src="img/others/postres.jpg" alt="Postres gourmet"></div>
      <div class="swiper-slide"><img src="img/others/fiesta.jpg" alt="Fiestas de empresa"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- SECCIONES -->
  <section class="banner" data-aos="fade-right">
    <div class="banner-img" style="background-image: url('img/others/cafe.jpg');"></div>
    <div class="banner-text">
      <h2>Estaciones de Café</h2>
      <p>Catering empresarial especializado para todo tipo de eventos corporativos. Estaciones de café personalizadas, refrigerios saludables y comida para eventos masivos o pasabocas gourmet. Cubrimos Bogotá y Cundinamarca, asegurando que cada pausa o evento sea un éxito.</p>
    </div>
  </section>

  <section class="banner" data-aos="fade-left">
    <div class="banner-text">
      <h2>Refrigerios y Almuerzos Empacados</h2>
      <p>La opción práctica y deliciosa para tus reuniones o días de oficina. Almuerzos y refrigerios empacados, frescos y balanceados, perfectos para consentir a tus clientes o equipo de trabajo.</p>
    </div>
    <div class="banner-img" style="background-image: url('img/others/refri.jpg');"></div>
  </section>

  <section class="banner" data-aos="fade-right">
    <div class="banner-img" style="background-image: url('img/others/desayunosem.jpg');"></div>
    <div class="banner-text">
      <h2>Desayunos y Almuerzos de Trabajo</h2>
      <p>Opciones saludables y gourmet diseñadas para destacar en cualquier evento, garantizando experiencias revitalizantes y deliciosas.</p>
    </div>
  </section>

  <section class="banner" data-aos="fade-left">
    <div class="banner-text">
      <h2>Postres para Eventos</h2>
      <p>Mini pasteles, galletas artesanales y postres individuales ideales para reuniones o celebraciones empresariales. Cada detalle cuenta.</p>
    </div>
    <div class="banner-img" style="background-image: url('img/others/postrescatering.jpg');"></div>
  </section>

  <section class="banner" data-aos="fade-right">
    <div class="banner-img" style="background-image: url('img/others/martinis.jpg');"></div>
    <div class="banner-text">
      <h2>Organización de Fiestas Empresariales</h2>
      <p>Desde la elección del lugar, decoración y menú gourmet, hasta entretenimiento y logística. Más de 20 años creando experiencias inolvidables en Bogotá y Cundinamarca.</p>
    </div>
  </section>
<!-- AQUI TERMINA TU CONTENIDO ÚNICO -->

<?php 
    include 'includes/form.php'; 
    // 3. Incluimos el Footer
    include 'includes/footer.php'; 
?>