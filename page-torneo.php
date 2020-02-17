<?php /* Template Name: Torneo */ ?>
<?php get_header(); ?>

            <div class="bannerSection">
                <h2>Torneo</h2>
            </div>
            <div class="subMenuSection">
                <nav>
                    <ul>
                        <li id="submenuActivo"><a href="#">Juveniles</a></li>
                        <li><a href="#">Flag</a></li>
                        <li><a href="#">Mayores</a></li>
                        <!-- <li><a href="#">Flag femenino</a></li> -->
                        <!-- <li><a href="#">Selecciones</a></li> -->
                    </ul>
                </nav>
            </div>

            <section class="tablaPrincipal">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </section>

<?php get_footer(); ?>