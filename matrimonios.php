<?php 
    // 1. Definimos el título de esta página específica
    $titulo = "Matrimonios - Catering Pro"; 
    
    // 2. Incluimos el Header
    include 'includes/header.php'; 
?>

<!-- AQUI EMPIEZA TU CONTENIDO ÚNICO DE LA HOME -->
<!-- HERO BANNER  -->
<section class="hero">
  <div class="hero-content">
    <h1>Matrimonios</h1>
    <p>
      Creamos experiencias únicas que celebran el amor con elegancia, dedicación
      y sabor inigualable.
    </p>
    <a href="#banquete" class="hero-btn">Descubre más</a>
  </div>
</section>


  <!-- BANQUETE -->
  <section class="banner banner-left">
    <div class="banner-text" data-aos="fade-right">
      <h2>Banquete</h2>
      <p>Diseñamos menús personalizados que incluyen opciones para todas las preferencias y restricciones alimentarias. Cada plato refleja calidad, sabor y presentación impecable.</p>
      <a href="#contacto" class="btn">Cotiza en línea</a>
    </div>
    <div class="banner-img" style="background-image: url('img/others/finger-foods-3.jpg');" data-aos="fade-left"></div>
  </section>

  <!-- FOTOGRAFÍA -->
  <section class="banner banner-right">
    <div class="banner-img" style="background-image: url('img/others/glass-view.jpg');" data-aos="fade-right"></div>
    <div class="banner-text" data-aos="fade-left">
      <h2>Fotografía</h2>
      <p>Capturamos los momentos más emotivos de tu boda con un enfoque artístico y natural, para que conserves recuerdos eternos de ese día tan especial.</p>
      <a href="#contacto" class="btn">Cotiza en línea</a>
    </div>
  </section>

  <!-- DECORACIÓN -->
  <section class="banner banner-left">
    <div class="banner-text" data-aos="fade-right">
      <h2>Decoración</h2>
      <p>Creamos ambientes mágicos y personalizados, combinando flores, iluminación y estilo para reflejar la esencia de cada pareja.</p>
      <a href="#contacto" class="btn">Cotiza en línea</a>
    </div>
    <div class="banner-img" style="background-image: url('img/others/preparation-show.jpg');" data-aos="fade-left"></div>
  </section>

  <!-- RECEPCIÓN -->
  <section class="banner banner-right">
    <div class="banner-img" style="background-image: url('img/others/service-atention.jpg');" data-aos="fade-right"></div>
    <div class="banner-text" data-aos="fade-left">
      <h2>Recepción</h2>
      <p>Nos encargamos de la logística, ambientación y servicio para que disfrutes de una recepción perfecta junto a tus invitados.</p>
      <a href="#contacto" class="btn">Cotiza en línea</a>
    </div>
  </section>
<!-- AQUI TERMINA TU CONTENIDO ÚNICO -->

<?php 
    include 'includes/form.php'; 
    // 3. Incluimos el Footer
    include 'includes/footer.php'; 
?>