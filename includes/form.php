<!-- Agregué id="form" porque en tu botón de arriba tienes un href="#form" -->
<!-- Corregí 'clase' por 'class' -->
<!-- Actualicé la ruta de la imagen a assets/img/... -->
<!-- Agregué background-size y blend-mode para que el texto se lea bien sobre la foto -->
<section id="form" class="form-container" style="
    background-image: url('assets/img/others/amasijos.png'); 
    background-size: cover;
    height: 80vh; 
    background-position: center;
    background-blend-mode: overlay;
    background-color: rgba(0,0,0,0.5);"> 
    
    <!-- Agregué method="POST" para que funcione el envío en el futuro -->
    <form class="form-box" action="actions/enviar_correo.php" method="POST">
        
        <!-- Usé la clase .section-title pero en pequeño (h3) para mantener la fuente -->
        <h3 style="font-family: var(--font-primary); font-size: var(--text-medium); margin-bottom: 1rem;">
            Contáctanos
        </h3>
        
        <p style="margin-bottom: 1.5rem;">¿No está seguro de a quién contactar? Llene el formulario y nos pondremos en contacto lo más pronto posible.</p>
        
        <!-- Agrupé los inputs con la clase .form-group si quieres separarlos más, 
             pero el CSS actual de 'input' ya tiene buen estilo -->
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input required type="text" id="nombre" name="nombre" placeholder="Tu nombre">
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input required type="text" id="apellido" name="apellido" placeholder="Tu apellido">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input required type="email" id="email" name="email" placeholder="ejemplo@dominio.com">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input required type="tel" id="telefono" name="telefono" placeholder="300 123 4567">
            </div>

            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea required id="message" name="mensaje" placeholder="Detalles de tu interés"></textarea>
            </div>
            
        </div>
        
        <!-- CAMBIO IMPORTANTE: class="btn-primary" para que tome el estilo nuevo -->
        <button class="btn-primary" type="submit" style="margin-top: 2rem; width: 100%;">Enviar</button>
    </form>
</section>