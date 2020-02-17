<style>
.imagenRedaccionNota{
    border-radius:6px;
    overflow:hidden;
}
.imagenRedaccionNota img{
    width:100%;
    height:100%;
}

/*ESTILSO BOTONES COMPARTIR*/
.ssbp--theme-11{
    margin-left:0px!important;
    margin-right:0px!important;
}
.ssbp--theme-11 div{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}

.ssbp--theme-11 .ssba_facebook_share{
    background:#3B5998;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:row-reverse;
}
.ssbp--theme-11 .ssba_twitter_share{
    background:#1DA1F2;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:row-reverse;
}
.ssbp--theme-11 .ssba_pinterest_share{
    background:#E12A4C;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:row-reverse;
}



.bannerSection{
    height:70vh!important;
    max-height:600px!important;
}
.wp-post-image{
    display:none!important;
}

.editorNota{
    width:350px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:20px;
    margin-left:auto;
    margin-right:auto;
}
.editorNota img{
    border-radius:50%;
    width:40px;
    height:40px;
    margin-right:6px;
}
.autorNI{
    font-family:'Montserrat', sans-serif;
    font-size: 14px;
    text-transform:uppercase;
    font-weight:600;
    color:#fff;
}
.fechaNI{
    font-family:'Montserrat', sans-serif;
    font-size:14px;
    color:#ccc;
    text-transform:uppercase;
    margin-left:6px;
}

.navText a{
    font-family:'Montserrat', sans-serif;
    font-size:14px;
    font-weight:600;
    color:#3f3f3f;
    text-decoration:none;
    /*display:flex;*/
    height:35px;
    width:90%;
}
.textNavN{
    display:flex;
    justify-content:flex-start;
}
.textNavP{
    display:flex;
    justify-content:flex-end;
}
.textNavN a{
    text-align:left;
}
.textNavP a{
    text-align:right;
}
div.textOtrasNotas:nth-child(1){
    padding-left:0px!important;
}

.textOtrasNotas p{
    font-family:'Montserrat', sans-serif;
    font-weight:600;
    font-size:11px;
    color:#939393;
    display:flex;
}
.infoNotaSiguiente{
    justify-content:flex-start;
}
.margenDer{
    margin-right:6px;
}
.infoNotaAnterior{
    justify-content:flex-end;
}
.notaFlecha{
    position:relative;
}
.linkNotaFlecha{
    position:absolute;
    top:0;
    left:0;
    display:block;
    width:100%!important;
    height:100%;
    background-color:rgba(0,0,0,0.0)!important;
    z-index:5;
}
.otrasNotas2{
        justify-content: flex-end!important;
}
@media screen and (min-width:1600px){
    .bannerSection{
        height: 600px;
    }
}
@media screen and (max-width:600px){
    .datoRedaccionNota{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
    }
    .textRedaccionNota h3{
        text-align:center;
    }
    .textRedaccionNota span{
        margin-left: auto;

        margin-right: auto;

        width: 150px;

        display: block;

        text-align: center;
    }
    .textRedaccionNota p{
        text-align:center;
    }
}

</style>
<?php get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main id='mainSingle'>
            <div class="bannerSection">
                <div class="bannerText">
                    <h2 id="refTituloNota"><?php the_title(); ?></h2>
                    <div class="editorNota">
                    <?php $author_email = get_the_author_email(); echo get_avatar($author_email, '32'); ?>
                    <span class="autorNI"><?php the_author(); ?></span>
                    <span class="fechaNI"><?php the_time('F j, Y'); ?></span>
                    </div>
                </div>
                <div class="filtroBanner"></div>
            </div>
            <div class="contenidoNota">
                <div class="textoImagenNota">
                <?php 
                                if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array(
                                    'class' => ''
                                ));
                                } ?>
                        <?php the_content(); ?>
                </div>
                <!--<div class="compartirNota">
                    <a id="compartirFacebook" href="#"><i class="fab fa-facebook-f"></i>Compartir en Facebook</a>
                    <a id="compartirTwitter" href="#"><i class="fab fa-twitter"></i>Compartir en Twitter</a>
                    <a id="compartirInstagram" href="#"><i class="fab fa-instagram"></i>Compartir en Instagram</a>
                </div>-->
                <div class="compartirNota">
                <?php echo do_shortcode( '[ssba-buttons]' ); ?>
                </div>
                
                <div class="datoRedaccionNota">
                    <div class="imagenRedaccionNota">
                    <?php $author_email = get_the_author_email(); echo get_avatar($author_email, '32'); ?>
                    </div>
                    <div class="textRedaccionNota">
                        <h3><?php the_author(); ?></h3>
                        
                        <!--<span>Editor Nota</span>-->
                        <span><?php echo get_the_author_meta('perfil_rol') ?></span>
                        <p>
                            <?php the_author_meta('description'); ?> 
                        </p>
                        
                    </div>
                </div>
                <div class="otrasNotas" id="otrasNotas">
                    <div class="notaFlecha flechaSiguiente" id="flechaSiguiente">
                    <a href="" class="linkNotaFlecha"></a>
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <div class="textOtrasNotas">
                            <?php if (strlen(get_next_post()->post_title) > 0) { ?>
                            <div class="navText textNavN"  id="spanSiguiente"><?php next_post_link('%link') ?></div>
                            <?php }?>
                            
                            <p class="infoNotaSiguiente">
                            <?php
                            $prev_post = get_next_post();
                            $prev_user = get_user_by( 'id', $prev_post->post_author );
                            if (!empty( $prev_post )): ?>
                            <span class="margenDer"><?php echo $prev_user->first_name . ' ' . $prev_user->last_name; ?></span>
                            <?php endif ?>

                            <?php// $prev_post = get_next_post(); ?>
                            <span><?php echo mysql2date('d F Y', $prev_post->post_date, false) ?></span>
                            </p>
                            <!--<h4>Se viene Patricios vs Samuráis, 
                                    episodio 4</h4>
                            <span>10 de Agosto, 2019 / por Tomas Caceres</span>
                            <a href="#"></a>-->
                        </div>
                    </div>
                    <div class="notaFlecha felchaAnterior">
                    <a href="" class="linkNotaFlecha"></a>
                        
                        <div class="textOtrasNotas">
                            <?php if (strlen(get_previous_post()->post_title) > 0) { ?>
                            <div class="navText textNavP"><?php previous_post_link('%link') ?></div>
                            <?php }?>
                            <p class="infoNotaAnterior">    
                            <?php
                            $prev_post = get_previous_post();
                            $prev_user = get_user_by( 'id', $prev_post->post_author );
                            if (!empty( $prev_post )): ?>
                            <span class="margenDer"><?php echo $prev_user->first_name . ' ' . $prev_user->last_name; ?></span>
                            <?php endif ?>

                            <?php// $prev_post = get_next_post(); ?>
                            <span><?php echo mysql2date('d F Y', $prev_post->post_date, false) ?></span>   
                            </p>
                            <!--<h4>Se viene Patricios vs Samuráis, 
                                    episodio 4</h4>
                            <span>10 de Agosto, 2019 / por Tomas Caceres</span>
                            <a href="#"></a>-->
                        </div>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </main>
        <?php endwhile; endif; ?>

        <script>
            var imagenesCompartir = document.querySelectorAll('.ssba-img');
            for(var i=0; i<imagenesCompartir.length; i++){
                    imagenesCompartir[i].parentNode.removeChild(imagenesCompartir[i]);
            }
            var fbCompartir = document.querySelector('.ssba_facebook_share');
            fbCompartir.innerHTML = 'Compartir en Facebook';
            
            var iconoFb = document.createElement("i");
            var textIconFb = document.createTextNode("");
            iconoFb.appendChild(textIconFb);
            iconoFb.className = 'fab fa-facebook-f';
            fbCompartir.appendChild(iconoFb);
            fbCompartir.id = 'compartirFacebook';

            
            var twCompartir = document.querySelector('.ssba_twitter_share');
            twCompartir.innerHTML = 'Compartir en Twitter';
            
            var iconoTw = document.createElement("i");
            var textIconTw = document.createTextNode("");
            iconoTw.appendChild(textIconTw);
            iconoTw.className = 'fab fa-twitter';
            twCompartir.appendChild(iconoTw);
            twCompartir.id = 'compartirTwitter';

            
            var igCompartir = document.querySelector('.ssba_pinterest_share');
            igCompartir.innerHTML = 'Visitar Instagram';
            
            var iconoIg = document.createElement("i");
            var textIconIg = document.createTextNode("");
            iconoIg.appendChild(textIconIg);
            iconoIg.className = 'fab fa-instagram';
            igCompartir.appendChild(iconoIg);
            igCompartir.id = 'compartirInstagram';

            igCompartir.href = 'https://www.instagram.com/faargonline/';

            /*CODIGO PARA EL FONDO DE LA NOTA*/
            var imgFondo = document.querySelector('.wp-post-image');
            imgFondo = imgFondo.src;
            imgFondo = 'url(' + imgFondo + ')'
            console.log('la url es: ' + imgFondo);

            var contenedorbanner = document.querySelector('.bannerSection');
            contenedorbanner.style.backgroundImage = imgFondo;

            /*CODIGO PARA LA BOTONERA DE SIGUIENTE ANTERIOR*/
            var refSiguiente = document.querySelector('#spanSiguiente');
            var flechaSiguiente = document.querySelector('#flechaSiguiente');
            if(refSiguiente){
                console.log('hay texto');
            }else{
                console.log('no hay texto');
                flechaSiguiente.parentNode.removeChild(flechaSiguiente);
                document.querySelector('#otrasNotas').className = 'otrasNotas otrasNotas2';
            }

            var enlacesBotones = document.querySelectorAll('.navText > a');

            var enlaceBtnPrincipal = document.querySelectorAll('.linkNotaFlecha');

            for(var i=0; i<enlaceBtnPrincipal.length; i++){
                enlaceBtnPrincipal[i].href = enlacesBotones[i].href;
            }

        </script>
        
        <?php get_footer(); ?>