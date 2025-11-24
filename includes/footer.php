</main> <!-- Cierre del contenido principal -->
    <footer>
        <nav class="footer-nav" aria-label="Enlaces de navegación del pie de página">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="matrimonios.php">MATRIMONIOS</a></li>
                <li><a href="corporativos.php">EVENTOS CORPORATIVOS</a></li>
                <li><a href="fiestas_privadas.php">FIESTAS PRIVADAS</a></li>
                <li><a href="galeria.php">GALERIA</a></li>
            </ul>
            <div class="slogan">
                <p>Cocinamos Sabores Perfectos</p>
            </div>
        </nav>
        <div class="footer-bottom">
            <p class="copyright">&copy;2025 Catering Pro todos los derechos reservados.</p>
        </div>
    </footer>
    
    <script src="assets/js/togglemenu.js"></script>
    <!-- 1. Coloca esto JUSTO ANTES de la etiqueta de cierre </body> -->

<!-- IMPORTANTE: Primero la librería -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Luego el script de detección -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Imprimimos en consola para verificar que el script arranca
        console.log("Script de alertas iniciado...");

        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        
        console.log("Estado detectado en URL:", status); // Ver qué detecta

        if (status) {
            // Colores
            const colorPrimario = '#151515'; 
            const colorFondo = '#ececec';

            if (status === 'success') {
                Swal.fire({
                    title: '¡Mensaje Enviado!',
                    text: 'Gracias por contactarnos. Nos pondremos en comunicación contigo muy pronto.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: colorPrimario,
                    background: colorFondo,
                    color: colorPrimario
                }).then(() => {
                    limpiarUrl();
                });
            } 
            else if (status === 'error') {
                Swal.fire({
                    title: 'Error',
                    text: 'No se pudo enviar el mensaje.',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#d33',
                    background: colorFondo
                }).then(() => {
                    limpiarUrl();
                });
            }
        }
    });

    function limpiarUrl() {
        const url = new URL(window.location);
        url.searchParams.delete('status');
        window.history.replaceState(null, '', url);
    }
</script>

</body> <!-- Fin del body -->
</body>
</html>