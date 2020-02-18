<?php /* Template Name:Inicio*/ ?>
<?php get_header(); ?>

<style>
.ngg-albumoverview.default-view .ngg-album-compact{
   
    box-sizing:border-box;
    padding:0px!important;
    box-shadow:none!important;
    background:#fff;
    position:relative;
    max-width:243px;
    width:243px;
    height:143px;
    overflow:hidden;
    margin:10px 5px!important;
    display:flex;
    flex-direction:column-reverse;
    /* border-radius:6px; */
    /* border:1px solid #38A9FF; */
    border:none;
}

/* .ngg-albumoverview.default-view .ngg-album-compactbox, .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb{
    background:red;
    width:100%;
    height:100%;
    max-height:248px;
    overflow:hidden;
} */
.ngg-albumoverview.default-view .ngg-album-compactbox, .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb{
    height:165px;
    /* background:red; */
}
.ngg-album-compactbox{
    border-radius:0px;
    padding:0px!important;
    /* max-width:350px; */
    /* overflow:hidden; */
    /* width:100%; */
}
.ngg-albumoverview.default-view{
    display:flex!important;
    flex-wrap:wrap;
    justify-content:center;
}
.ngg-album-compact h4{
    margin-top:0px;
    padding-top:10px!important;
    background-color:#003B75;
}
.ngg-albumoverview.default-view .ngg-album-compact h4 .ngg-album-desc{
    text-decoration:none;
    color:#fff;
    font-size:16px;
    font-family: 'Montserrat', sans-serif;
}
/* .ngg-albumoverview.default-view .ngg-album-compact h4{
    position:absolute;
    top:0;
    left:0;
    z-index:1;
    width:100%;
    background-color:#003B75;
} */
.ngg-album-link{
    position:relative;
}
.linkHover{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    display:flex;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.42);
    z-index:2;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    color:#38A9FF;
    font-size:30px;
    font-weight:600;
    font-family:'Montserrat', sans-serif;
    opacity:1;
    transition: 0.3s linear;
}
.ngg-albumoverview.default-view .ngg-album-compact:hover .linkHover{
    opacity:1;
    font-size:30px;
    background-color:rgba(0,0,0,0.72);
}
.linkHover i{
    transition-duration:0.5s;
}
.ngg-albumoverview.default-view .ngg-album-compact:hover .linkHover i{
    margin-top:-20%;
}
.imagenesGaleria{
    padding-top:0px;
    padding-bottom:0px;
}
.ngg-albumoverview.default-view .ngg-album-compact h4{
    position:absolute;
    z-index:1;
    bottom:10px;
    left:10px;
    background-color:initial;
    width:80%;
    padding-top:0px!important;
    opacity:0;
    /* margin-left:10px; */
}
.ngg-albumoverview.default-view .ngg-album-compact h4 .ngg-album-desc{
    font-size:14px;
    text-align:left;
}
.ngg-albumoverview.default-view .ngg-album-compact h4{
    transition-duration:0.5s;
}
.ngg-albumoverview.default-view .ngg-album-compact:hover h4{
    opacity:1;
}



@media screen and (min-width: 1024px){
    .imagenesGaleria{
        height:227px;
    }
    .ngg-albumoverview{
        height:143px;
        /* background:red; */
    }
    .ngg-albumoverview.default-view .ngg-album-compact{
        margin:0px!important;
    }
    .ngg-clear{
        display:none;
    }
    .ngg-albumoverview.default-view{
        justify-content:space-around;
    }
}


/*ESTILOS PARA LA PARTE DE VIDEOS DEL INDEX*/
/* #TotalSoft_GV_HLG_759_1{
    width:243px!important;
    height:143px!important;
    border:none;
} */
#TotalSoft_GV_HLG_176_1{
    width:243px!important;
    height:143px!important;
    border:none!important;
}

.video_frame:hover .video_image_frame img{
    border:none!important;
    box-shadow:none!important;
}
.video_image_frame img{
    border:none!important;
    box-shadow:none!important;
}
.html5video-medium-12{
    width:243px;
    height:143px;
    background:red;
}
.video-row{
    width:100%;
    margin:0;
    display:flex;
    align-items:center;
    justify-content:space-around;
    flex-wrap:wrap;
}
.html5video-wpcolumn, .html5video-columns{
    padding:0px!important;
}
.video-row-clearfix::after, .video-row-clearfix::after{
    display:none!important;
}
.html5video-medium-12 .video_image_frame{
    height:143px;
    position:relative;
}
.video_frame .video_title{
    position:absolute;
    bottom:10px;
    left:10px;
    z-index:1;
    text-align:left;
    font-family:'Montserrat', sans-serif;
    font-size:14px;
    color:#fff;
    text-transform:uppercase;
    font-weight:600;
}
.video_icon{
    width:100%;
    height:100%;
    margin-top:0;
    margin-left:0;
    transform:translate(-50%, -50%)!important;
    background:rgba(0, 0, 0, 0.42);
    z-index:2;
    font-size:30px;
}
.video_icon i{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    color:#38A9FF;
    transition-duration:0.5s;
}
.video_icon:hover i{
    top:30%;
}
.bannerSlider{
    background-color:#38A9FF;
}
@media screen and (max-width:600px){
    .ngg-albumoverview{
        margin-top:0px;
    }
    .ngg-albumoverview.default-view .ngg-album-compact{
        max-width:100%;
        width:100%;
        margin:10px 0px!important;
        height:auto;
    }
    .ngg-albumoverview.default-view .ngg-album-compactbox, .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb{
        height:auto;
        transform:scale(1.05);
    }
    
}

.subnota{
    transition-duration:0.3s;
}
.subnota:hover{
    background-color:#38A9FF;

}
.subnota .textNotaSub h2 a, .subnota .textNotaSub span{
    transition-duration:0.3s;
}
.subnota:hover .textNotaSub span{
    color:#fff;
}
.subnota:hover .textNotaSub h2 a{
    color:#fff;
}


</style>


        <div id="slider">
            <div class="contenedorSlider slider1 sliderInicial">
                <!-- <img src="/imagenes/slider1.jpg" alt=""> -->
                <div class="textSlider textSliderActivo" id="textSlider1">
                    <h2>Football Americano <br>Categoria juevenil</h2>
                    <p>15 a 19 años - Inscripción abierta todo el año</p>
                </div>
            </div>
            <div class="contenedorSlider slider2">
                <div class="textSlider textSliderInactivo" id="textSlider2">
                    <h2>Football Americano <br>Categoria juevenil</h2>
                    <p>15 a 19 años - Inscripción abierta todo el año</p>
                </div>
            </div>
            <div class="contenedorSlider slider3">
                <div class="textSlider textSliderInactivo" id="textSlider3">
                    <h2>Sumate a nuestro <br>equipo de oficiales</h2>
                    <p>Curso de oficiales de football amercanico Argentina</p>
                </div>
            </div>
            <div class="botoneraSlider">
                <button class="btnSliderActivo" id="btnSliderP1">1</button>
                <button id="btnSliderP2">2</button>
                <button id="btnSliderP3">3</button>
            </div>
        </div>
        <div class="bannerSlider">
            <button class="btnSlider" id="btnSliderIzq"><i class="fas fa-chevron-left"></i></button>
            <button class="btnSlider" id="btnSliderDer"><i class="fas fa-chevron-right"></i></button>
            <div class="contenedorImagenesLogos">
                <ul class="columnaLogos logosActivo" id="columnaLogo1">
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-osos-polares-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/OSP.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-tiburones-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/TIB.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-cruzados-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/CRU.png" alt=""></a></li>
                    <!-- <li><a href="#"><img src="/imagenes/escudos/jabalies.png" alt=""></a></li> -->
                </ul>
                <ul class="columnaLogos logosInactivo" id="columnaLogo2">
                    <!-- <li><a href="#"><img src="/imagenes/escudos/corsarios.png" alt=""></a></li> -->
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-corsarios-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/COR.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-jabalies-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/JAV.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-legionarios-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/LEG.png" alt=""></a></li>
                </ul>
                <ul class="columnaLogos logosInactivo" id="columnaLogo3">
                    <!-- <li><a href="#"><img src="/imagenes/escudos/yacares.png" alt=""></a></li> -->
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-aztecas-2020"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/AZT.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-yacares-2020"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/YAC.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-coyotes-2020"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/COY.png" alt=""></a></li>
                </ul>  
                <!--<ul class="columnaLogos logosInactivo" id="columnaLogo4">
                    <li><a href="#"><img src="/imagenes/escudos/corsarios.png" alt=""></a></li>
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/VAL.png" alt=""></a></li>
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/TIG.png" alt=""></a></li>
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/MED.png" alt=""></a></li>
                </ul>-->
            </div>
             
        </div>

        <main id='mainIndex'>
            <section class="contenido">
                <div class="encabezadoContenido">
                    <h2>Noticias</h2>
                    <a href="http://faarg.arlud.com/?page_id=63127">Ver mas</a>
                </div>
                <div class="contenedorNotas">
                    <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- <article class="nota">
                            <div class="imagenNota">
                                <?php/* 
                                if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array(
                                    'class' => ''
                                ));
                                } */?>
                            </div>
                            <div class="textNota">
                                <span><?php// the_time('F j, Y'); ?> / por <?php the_author(); ?></span>
                                <h2><a href="<?php// the_permalink(); ?>">
                                    <?php// the_title(); ?>
                                    </a>
                                </h2>
                                <?php// the_excerpt(); ?>
                            </div>
                    </article> -->
                    <?php// endwhile; endif; ?>

                    <?php 
                    $args =array(
                        'posts_per_page' => 4
                    );
                    $entradas = new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                    ?>
                    
                    <article class="nota">
                    <div class="notaSectionImagen">
                            <?php the_post_thumbnail();
                            //the_post_thumbnail( 'thumbnail', array( 'class' => 'nEscritorio' ) );
                            ?>
                            <style>
                                
                                .notaSectionImagen{
                                    max-height:200px;
                                    overflow:hidden;
                                    
                                }
                                .notaSectionImagen img{
                                    width:100%;
                                    height:auto;
                                    display:block;
                                    /* max-height:200px; */
                                }
                                .notaSection{
                                    position:relative;
                                }
                                .linkNotas{
                                    position:absolute;
                                    display:block;
                                    width:100%;
                                    height:100%;
                                    top:0;
                                    left:0;
                                }
                            </style>
                        </div>
                            <div class="textNota">
                                <span><?php the_time('F j, Y'); ?> / por <?php the_author(); ?></span>
                                <h2><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                            </div>
                    </article>

                    <?php
                    endwhile; wp_reset_postdata();
                    ?>
                    
                    <article class="nota" id="contenedorSubNotas">
                    <?php 
                    $args2 =array(
                        'posts_per_page' => 7
                    );
                    $entradas = new WP_Query($args2); while($entradas->have_posts() ): $entradas->the_post();
                    ?>
                    
                    <div class="subnota">
                            <div class="imagenNotaSub">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="textNotaSub">
                                <span><?php the_time('F j, Y'); ?> / por <?php the_author(); ?></span>
                                <h2><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                            </div>
                    </div>

                    <?php
                    endwhile; wp_reset_postdata();
                    ?>
                    </article>

                    <div class="publicidadEscritorio">
                        <img src="wp-content/themes/LigaArlud/imagenes/podcast.jpg" alt="">
                    </div>
                </div>
                    
                    
            </section>

            <section class="publicidad">
                <img src="wp-content/themes/LigaArlud/imagenes/podcast.jpg" alt="">
            </section>
            <div class="asideRedes asideRedesHorizontalOn" id="redesHorizontal">
                <div class="filaRedes filafb">
                    <span class="iconFilaRedes"><i class="fab fa-facebook-f"></i></span>
                    <p><strong>facebook</strong> 10.0218 likes</p>
                    <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                    <a href="#"></a>
                </div>
                <div class="filaRedes filaig">
                    <span class="iconFilaRedes"><i class="fab fa-instagram"></i></span>
                    <p><strong>instagram</strong> 3.304 seguidores</p>
                    <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                    <a href="#"></a>
                </div>
                <div class="filaRedes filatw">
                    <span class="iconFilaRedes"><i class="fab fa-twitter"></i></span>
                    <p><strong>twitter</strong> 1.200 seguidores</p>
                    <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                    <a href="#"></a>
                </div>
                <div class="filaRedes filayt">
                    <span class="iconFilaRedes"><i class="fab fa-youtube"></i></span>
                    <p><strong>youtube</strong> 489 suscriptores</p>
                    <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                    <a href="#"></a>
                </div>
                <div class="filaRedes filars">
                    <span class="iconFilaRedes"><i class="fas fa-rss"></i></span>
                    <p><strong>Suscribite al feed</strong> 60 suscriptores</p>
                    <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                    <a href="#"></a>
                </div>
            </div>
           <?php get_sidebar(); ?>

            <section class="multimedia">
                <article class="contenedorGaleria">
                    <div class="encabezadoGaleria">
                        <h2>Fotos</h2>
                        <a href="http://faarg.arlud.com/?page_id=63133">Ver todos</a>
                    </div>    
                    <div class="imagenesGaleria">
                    <?php echo do_shortcode( '[ngg_images album_ids = "3" display_type = "photocrati-nextgen_basic_compact_album"]' ); ?>
                    
                        <!-- <div class="imagenGaleria imagenGaleria1">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="secciones/mayoresIndividual.html"><i class="far fa-images"></i><span><strong>Fotos Osos polares vs Tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="imagenGaleria imagenGaleria2">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="secciones/mayoresIndividual.html"><i class="far fa-images"></i><span><strong>Fotos Osos polares vs Tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="imagenGaleria imagenGaleria3">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="secciones/mayoresIndividual.html"><i class="far fa-images"></i><span><strong>Fotos Osos polares vs Tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="imagenGaleria imagenGaleria4">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="secciones/mayoresIndividual.html"><i class="far fa-images"></i> <span><strong>Fotos Osos polares vs Tiburones</strong>Marzo 31</span></a>
                        </div> -->
                    </div>
                </article>

                <article class="contenedorVideos">
                    <div class="encabezadoVideos">
                        <h2>Videos</h2>
                        <a href="http://faarg.arlud.com/?page_id=63135">Ver todos</a>
                    </div>    
                    <div class="videosGaleria">
                    <?php echo do_shortcode('[sp_html5video category="48"]');?>
                        <!-- <div class="videoGaleria videoGaleria1">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="/secciones/videoIndividual.html"><i class="far fa-play-circle"></i><span><strong>Videos Osos polares vs tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="videoGaleria videoGaleria2">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="/secciones/videoIndividual.html"><i class="far fa-play-circle"></i><span><strong>Videos Osos polares vs tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="videoGaleria videoGaleria3">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="/secciones/videoIndividual.html"><i class="far fa-play-circle"></i><span><strong>Videos Osos polares vs tiburones</strong>Marzo 31</span></a>
                        </div>
                        <div class="videoGaleria videoGaleria4">
                            <img src="/imagenes/galeria.jpg" alt="">
                            <a href="/secciones/videoIndividual.html"><i class="far fa-play-circle"></i> <span><strong>Videos Osos polares vs tiburones</strong>Marzo 31</span></a>
                        </div> -->
                    </div>
                </article>
            </section>

            
        </main>
        <script>
        var contenedoresLinks = document.querySelectorAll('.ngg-album-link');
        console.log(contenedoresLinks);
        console.log('va bien');
        for(var i=0; i<contenedoresLinks.length; i++){
            var linkHover = document.createElement("a");

            var iconoImgLinkHover = document.createElement("i");
            iconoImgLinkHover.className = 'far fa-images';

            linkHover.appendChild(iconoImgLinkHover);

            var textLinkHover = document.createTextNode("");
            linkHover.appendChild(textLinkHover);

            contenedoresLinks[i].appendChild(linkHover);
        }
        linksHover = document.querySelectorAll(".ngg-album-link > a:nth-child(2)");
        for(var i=0; i<linksHover.length; i++){
            linksHover[i].className = 'linkHover';
        }

        console.log('script 2');
        linkOriginal = document.querySelectorAll(".ngg-album-link > a:nth-child(1)");
        for(var i=0; i<linkOriginal.length; i++){
            console.log(linkOriginal[i].getAttribute("href"));
        }

        console.log('script 3');
        linksHover = document.querySelectorAll(".ngg-album-link > a:nth-child(2)");
        for(var i=0; i<linksHover.length; i++){
            var linkR = linkOriginal[i].getAttribute("href");
            linksHover[i].setAttribute('href', linkR);
        }


        var contenedoresFotosInicio = document.querySelectorAll('.ngg-album-compact');
        
        for(var i=0; i<contenedoresFotosInicio.length; i++){
            if(i>=4){
                contenedoresFotosInicio[i].parentNode.removeChild(contenedoresFotosInicio[i]);
            }
        }
        console.log(contenedoresFotosInicio);



        //codigo para los videos

        var iconoVideo = document.createElement("i");
        var textIconoVideo = document.createTextNode("");
        iconoVideo.appendChild(textIconoVideo);

        iconoVideo.className = 'far fa-play-circle';
        console.log('iconoVideo');
        var contenedorIconosVideos = document.querySelectorAll('.video_icon');

        console.log(contenedorIconosVideos);
    
        //contenedorIconosVideos[0].appendChild(iconoVideo);
        for(var i=0; i<contenedorIconosVideos.length; i++){
            var iconoVideo = document.createElement("i");
            var textIconoVideo = document.createTextNode("");
            iconoVideo.appendChild(textIconoVideo);
            iconoVideo.className = 'far fa-play-circle';

            contenedorIconosVideos[i].appendChild(iconoVideo);
        }


        var textosVideos = document.querySelectorAll('.video_title');

        var maximoCaracteres = 38;

        for(var i=0; i<textosVideos.length; i++){
            console.log(textosVideos[i].innerHTML);
            var contenidoTexto = textosVideos[i].innerHTML;
            textosVideos[i].innerHTML = contenidoTexto.substring(0, maximoCaracteres);
        }


        var arrNotas = document.querySelectorAll('.nota');
        for(var i=0; i<arrNotas.length; i++){
            if(i>2 && i<4){
                arrNotas[i].id = 'ultimaNotaIndex';
            }
        }

        var arrSubNotas = document.querySelectorAll('.subnota');
        for(var i=0; i<arrSubNotas.length; i++){
            if(i<3){
                arrSubNotas[i].parentNode.removeChild(arrSubNotas[i]);
            }
        }

        /*LIMITAR CANTIDAD DE VIDEOS DISPONIBLES EN EL INDEX*/
        var arrVideos = document.querySelectorAll('.html5video-columns');

        for(var i=0; i<arrVideos.length; i++){
            if(i>=4){
                arrVideos[i].parentNode.removeChild(arrVideos[i]);
            }
        }

        </script>
       <?php get_footer(); ?>