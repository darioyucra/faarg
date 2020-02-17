<?php /* Template Name:Contacto*/ ?>
<?php get_header(); ?>
<div class="espacioNoticias">

</div>
<div class="bannerSection">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
</div>


<div class="contactoPrincipal">
    <div class="formularioContacto">
        <h3>FORMULARIO DE CONTACTO</h3>
        <div class="textFormulario">
            <h4>Questions? Send us a Message!</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, remeriam, eaque ipsa quae ab illo et quasi architecto.</p>

            <h4>Open Practices</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor doloremque incididunt ut labore et dolore magna.</p>

            <span><strong>Mondays to Fridays: </strong>9:00am to 12:00pm</span>
        </div>
      
      
        <div class="contenedorFormulario">
            <form action="#">
                <div class="campoFormulario">
                    <label>Nombre <span>*</span></label>
                    <input type="text" name="nombre" placeholder="Nombre y Apellido">
                </div>
                <div class="campoFormulario">
                    <label>Asunto <span>*</span></label>
                    <input type="text" name="asunto" placeholder="Asunto">  
                </div>
                <div class="campoFormulario">
                    <label>Correo <span>*</span></label>
                    <input type="text" name="correo" placeholder="Correo">
                </div>
                <div class="campoFormulario">
                    <label>Mensaje <span>*</span></label>
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </div>
                <input id="btnEnviarContacto" type="submit" value="Enviar Mensaje">
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>