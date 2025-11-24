<!-- Agregué id="form" porque en tu botón de arriba tienes un href="#form" -->
<!-- Corregí 'clase' por 'class' -->
<!-- Actualicé la ruta de la imagen a assets/img/... -->
<!-- Agregué background-size y blend-mode para que el texto se lea bien sobre la foto -->
<form id="form" class="form-box" action="actions/enviar_correo.php" method="POST">
        
    <!-- Usé la clase .section-title pero en pequeño (h3) para mantener la fuente -->
    <h3 class="section-title-2">CONTÁCTENOS</h3>
    <p>¿No está seguro de a quién contactar? Llene el formulario y nos pondremos en contacto lo más pronto posible para ayudarle.</p>
    <div class="inputs-container">
        <div class="form-group">
            <input required type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="form-group">
            <input required type="text" id="apellido" name="apellido" placeholder="Apellidos">
        </div>

        <div class="form-group">
            <input required type="email" id="email" name="email" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input required type="tel" id="telefono" name="telefono" placeholder="Número de teléfono">
        </div>
    </div>
    <div class="form-group">
        <textarea class="message-form" name="mensaje" placeholder="Detalles de la solicitud"></textarea>
    </div>
    <button class="btn-primary" type="submit">Enviar</button>
</form>