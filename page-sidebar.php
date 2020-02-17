<?php /* Template Name:  */ ?>
<?php get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main id='mainSingle'>
            <div class="bannerSection">
                <div class="bannerText">
                    <h2><?php the_title(); ?></h2>
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
                <div class="compartirNota">
                    <a id="compartirFacebook" href="#"><i class="fab fa-facebook-f"></i>Compartir en Facebook</a>
                    <a id="compartirTwitter" href="#"><i class="fab fa-twitter"></i>Compartir en Twitter</a>
                    <a id="compartirInstagram" href="#"><i class="fab fa-instagram"></i>Compartir en Instagram</a>
                    
                </div>
                <div class="datoRedaccionNota">
                    <div class="imagenRedaccionNota">
                    </div>
                    <div class="textRedaccionNota">
                        <h3><?php the_author(); ?></h3>
                        <span>Editor Nota</span>
                        <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore 
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.
                        </p>
                    </div>
                </div>
                <div class="otrasNotas">
                    <div class="notaFlecha">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <div class="textOtrasNotas">
                            <h4>Se viene Patricios vs Samuráis, 
                                    episodio 4</h4>
                            <span>10 de Agosto, 2019 / por Tomas Caceres</span>
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="notaFlecha">
                        
                        <div class="textOtrasNotas">
                            <h4>Se viene Patricios vs Samuráis, 
                                    episodio 4</h4>
                            <span>10 de Agosto, 2019 / por Tomas Caceres</span>
                            <a href="#"></a>
                        </div>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </main>
        <?php endwhile; endif; ?>
        
        <?php get_footer(); ?>