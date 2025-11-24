<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Merriweather+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=1.0">

    <!-- Título Dinámico: Si no definimos $titulo, usará "Catering Pro" por defecto -->
    <title><?php echo isset($titulo) ? $titulo : 'Catering Pro'; ?></title>
</head>
<body>
    <header>
        <h1>
            <a href="index.php"><img src="assets/img/logo-white.png" alt="Logo"></a>
            <a href="index.php">Catering Pro</a>
        </h1>    
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="matrimonios.php">MATRIMONIOS</a></li>
                <li><a href="corporativos.php">EVENTOS CORPORATIVOS</a></li>
                <li><a href="fiestas_privadas.php">FIESTAS PRIVADAS</a></li>
                <li><a href="galeria.php">GALERIA</a></li> 
            </ul>
            
            <div id="menu-toggle" aria-expanded="false" aria-controls="sidebar">
                <svg width="32" height="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
            </div>
        </nav>
    </header>

    <!-- Menú Móvil -->
    <div id="menu">
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="matrimonios.php">MATRIMONIOS</a></li>
                <li><a href="corporativos.php">EVENTOS CORPORATIVOS</a></li>
                <li><a href="fiestas_privadas.php">FIESTAS PRIVADAS</a></li>
                <li><a href="galeria.php">GALERIA</a></li> 
            </ul>
        </nav>
    </div>

    <div class="container">
    </div>
    <main>