<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faarg</title>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="/css/estilos.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="/js/menu.js"></script>
    <script src="/js/bannerlogos.js"></script>
    <script src="/js/aside.js"></script>
    <script src="/js/sliderprincipal.js"></script>
    <script>
    window.addEventListenter(load, function{
        document.title = 'pruebita';
    });
    </script>
</head>
<body>
<div id="principal">
        <header>
            <div class="headerFila1">
                <ul>
                    <li><a href="comollegar.html">Como llegar</a></li>
                    <li><a href="http://faarg.arlud.com/?page_id=63574">CONTACTANOS</a></li>
                    <li><a href="inscribite.html">INSCRIBITE</a></li>
                </ul>
            </div>
            <div class="headerFila2">
                <button id="btnMenu"><i class="fas fa-bars"></i></button>
                <div class="headerLogo">
                    <div class="imagenLogo">
                        <h1><a href="http://faarg.arlud.com/"><img src="<?php bloginfo('template_url'); ?>/imagenes/logo.png" alt=""></a></h1>
                        
                    </div>
                    <div class="textLogo">
                        <h2><a href="http://faarg.arlud.com/">FOOTBALL AMERICANO</a></h2>
                        <h1><a href="http://faarg.arlud.com/">Argentina</a></h1>
                    </div>
                </div>
                <div class="filtroMenu filtroMenuInicial" id="filtroMenu"></div>
                <div class="headerMenu headerMenuInicial" id="headerMenu">
                    <button id="cerrarMenu"><i class="fas fa-long-arrow-alt-left"></i></button>
                    <h1><a href="#"><img src="/imagenes/logo.png" alt=""></a></h1>
                    <nav>
                        <!-- <ul>
                            <li class="linkActivo"><a href="index.html">INICIO</a></li>
                            <li><a href="/secciones/noticias.html">NOTICIAS</a></li>
                            <li><a href="/secciones/torneo.html">TORNEO</a></li>
                            <li><a href="/secciones/jugadoresmayores.html">ESTADISTICAS</a></li>
                            <li><a href="/secciones/videos.html">VIDEOS</a></li>
                            <li><a href="secciones/fotos.html">FOTOS</a></li>
                        </ul> -->
                        <?php wp_nav_menu(array(
                            'container' => false,
                            'items_wrap' => '<ul>%3$s</ul>',
                            'theme_location' => 'menu-principal'
                        )); 

                        ?>
                    </nav>
                </div>
            </div>
        </header>