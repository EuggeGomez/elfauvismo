<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAUVISMO: La explosión del Color y la Emoción</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Afacad:wght@400;500;700&display=swap" rel="stylesheet">

<?php

$obras_fauvistas = [
    [
        'titulo' => 'Armonía en Rojo',
        'artista' => 'Henri Matisse',
        'anio' => '1908',
        'imagen' => '1armonia_en_rojo-matisse.webp'
    ],
    [
        'titulo' => 'La Ventana Abierta',
        'artista' => 'Henri Matisse',
        'anio' => '1905',
        'imagen' => '2la ventaana abierta-matisse.webp'
    ],
    [
        'titulo' => 'La Alegría de Vivir',
        'artista' => 'Henri Matisse',
        'anio' => '1905-1906',
        'imagen' => '3la_alegria_de_vivir-matisse.webp'
    ],
    [
        'titulo' => 'La Danza',
        'artista' => 'Henri Matisse',
        'anio' => '1909-1910',
        'imagen' => '4LADANZA-matisse.jpg'
    ],
    [
        'titulo' => 'Mujer con Sombrero',
        'artista' => 'Henri Matisse',
        'anio' => '1905',
        'imagen' => '6Matisse-Woman-with-a-Hat.jpg'
    ],
    [
        'titulo' => 'Maqueta Noche de Navidad',
        'artista' => 'Henri Matisse',
        'anio' => '1952',
        'imagen' => '5maqueta_noche_de_navidad-matisse.webp'
    ],
    [
        'titulo' => 'La Curva del Camino',
        'artista' => 'André Derain',
        'anio' => '1906',
        'imagen' => '7curva_del_camino-derain.webp'
    ],
    [
        'titulo' => 'Mujer con Camisa',
        'artista' => 'André Derain',
        'anio' => '1905',
        'imagen' => 'imagenes/8derain2-cke.webp'
    ],
    [
        'titulo' => 'La Danza - Baile de la Vida',
        'artista' => 'André Derain',
        'anio' => '1906',
        'imagen' => '9la_danza_baile_de_la_vida-derain.webp'
    ],
    [
        'titulo' => 'El Puente de Charing Cross',
        'artista' => 'André Derain',
        'anio' => '1906',
        'imagen' => '10puente_de_charing_cross-derain.jpg'
    ],
    [
        'titulo' => 'Retrato de Henri Matisse',
        'artista' => 'André Derain',
        'anio' => '1905',
        'imagen' => '11retrato_de_matisse-Derain.jpg'
    ],
    [
        'titulo' => 'Retrato de André Derain',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1905',
        'imagen' => '12portrait-of-derain-vlaminck.png'
    ],
    [
        'titulo' => 'Autumn',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1905',
        'imagen' => '13autumn-vlaminck.png'
    ],
    [
        'titulo' => 'Restaurant de la Machine Bougival',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1905',
        'imagen' => '14restaurant_de_la_machine_bougival-vla.png'
    ],
    [
        'titulo' => 'The Orchard',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1906',
        'imagen' => '15maurice-the-orchard-cke.webp'
    ],
    [
        'titulo' => 'Chaville',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1906',
        'imagen' => '16chaville-vlaminck.webp'
    ],
    [
        'titulo' => 'Veleros de Papel',
        'artista' => 'Maurice de Vlaminck',
        'anio' => '1905',
        'imagen' => '17veleros_de_papel-vlaminck.webp'
    ],
];
?>

</head>
<body>
    <header>
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="burger">
            <div></div>
            <div></div>
            <div></div>
        </label>
        <a href="index.html" class="logo-fauvismo">
            <img src="logo-fauvismo.png" alt="logo del sitio" class="logo-img">
        </a>
        
        <div class="nav-icons-container">
            <nav class="menu">
                <label for="menu-toggle" class="close-boton">X</label>
                <ul class="desktop-menu-list">
                    <li class="has-submenu">
                        <a href="artistas.html"> Artistas</a>
                    </li>
                    <li class="has-submenu">
                        <a href="galeria.php">Galería</a>
                    </li>
                    <li class="has-submenu">
                        <a href="filosofia.html"> Filosofía</a>
                    </li>
                    <li class="has-submenu">
                        <a href="influencias.html">Influencias</a>
                    </li>
                    <li class="has-submenu">
                        <a href="recursos.php"> Recursos</a>
                    </li>
                </ul>
            </nav>
            <a href="search.html" class="boton-search">
                <img src="search-fauvismo.png" class="icono-search" alt="busqueda">
            </a>
            <a href="fav.html" class="boton-fav">
                <img src="fav-fauvismo.png" class="icono-fav" alt="favorito">
            </a>
            <a href="login.html" class="boton-usuario">
                <img src="matisse-icon.png" class="icono-user" alt="usuario">
            </a>
        </div>
    </header>
    <main>
        <section class="galeria-section">
            <h2>Galería de Obras Fauvistas</h2>
            
            <ul class="galeria">
                <?php
              
                foreach ($obras_fauvistas as $index => $obra) {
                   
                    $alt_text = htmlentities($obra['titulo'] . ' - ' . $obra['artista']);
                    
                   
                    ?>
                    
                    <li class="gallery-item" data-index="<?php echo $index; ?>">
                        <img src="<?php echo $obra['imagen']; ?>" alt="<?php echo $alt_text; ?>">
                        <div class="overlay">
                            <div class="overlay-text">
                                <h3><?php echo $obra['titulo']; ?></h3>
                                <p><?php echo $obra['artista'] . ' (' . $obra['anio'] . ')'; ?></p>
                            </div>
                        </div>
                    </li>
                
                <?php
                }
                ?>
            </ul>

        </section>
    </main>
    
    <div id="lightbox-overlay" class="lightbox-overlay">
        <span class="lightbox-close">&times;</span>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="">
            <div class="lightbox-info">
                <p id="lightbox-title"></p>
                <p id="lightbox-artist"></p>
                <p id="lightbox-year"></p>
                <p id="lightbox-description"></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
<footer>
    <div class="footer-content">
        <p>© 2025 FAUVISMO. Todos los derechos reservados | Diseñado por Maria Eugenia Gómez| Proyecto Integrador-UP </p>
        <p>Contacto: <a href="mailto:info@fauvismo.com" class="footer-link">info@fauvismo.com</a></p>
    </div>
</footer>

</html>
