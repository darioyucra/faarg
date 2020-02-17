<?php /* Template Name:Noticias*/ ?>
<?php get_header(); ?>
<script>
var btnMenuActivo = document.querySelector('#menu-item-120');
btnMenuActivo.className += ' linkActivo';
</script>
<div class="espacioNoticias">

</div>
<div class="bannerSection">
    <h2>Noticias Todas</h2>
    <span id='filtroBannerSection'></span>
</div>
<div class="subMenuSection">
    <nav>
        <ul>
            <li id="submenuActivo"><a href="http://faarg.arlud.com/?page_id=63127">Todas</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63618">Mayores</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63620">Juveniles</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63628">Selecciones</a></li>
        </ul>
    </nav>
</div>
<section class="notasPrincipal">
                <?php //$the_query = new WP_Query( 'cat=44&showposts=3' ); ?>
                <?php 
                /*$args =array(
                    'posts_per_page' => -1
                );
                $entradas = new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                */?>
                <?php $the_query = new WP_Query( 'cat=0&showposts=10' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                
                <article class="notaSection">
                    <a href="<?php the_permalink(); ?>" class="linkNotas"></a>
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
                        <div class="notaSectionTexto">
                            <span><?php the_time('F j, Y'); ?> / por <?php the_author(); ?></span>
                            <h3>
                                
                            <?php the_title(); ?>
                                
                            </h3>
                            <?php the_excerpt(); ?>
                        </div>
                </article>
                <?php
                endwhile; wp_reset_postdata();
                ?>
                <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>
                

            </section>
<?php get_footer(); ?>