<?php /* Template Name:PAGINA ESTADISTICAS*/ ?>
<?php get_header(); ?>
<style>
tbody > tr{
    height:60px!important;
}
.data-passyds, .data-rushingyards, .data-receivingyards, .data-tackles, .data-sacks, .data-picks{
    width:60px!important;
    overflow:hidden;
    max-width:60px;
}
.sp-data-table .data-name{
    width:121px!important;
    max-width:121px;
}
.sp-data-table tbody a{
    display:none;
}
.encabezadoTablaEstadisticas a{
    background-color: #9390A5;
    border: none;
    font-size: 12px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
    height: 25px;
    width: 80px;
    display:flex;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    transition-duration:0.5s;
}
.encabezadoTablaEstadisticas a:hover{
    background-color:#fff;
    color:#9390a5;
}
</style>
<div class="espacioNoticias">

</div>
<div class="bannerSection">
    <!-- <h2>Osos polares</h2> -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
</div>
<div class="subMenuSection">
    <nav>
        <ul>
            <li id="submenuActivo"><a href="jugadoresmayores.html">Mayores</a></li>
            <li><a href="jugadoresmenores.html">Menores</a></li>
            <!-- <li><a href="jugadoresflag.html">Flag</a></li> -->
        </ul>
    </nav>
</div>

<div class="subMenuSection submenuSection2">
    <nav>
        <ul>
            <li id="submenuActivo"><a href="jugadoresmayores.html">Jugadores</a></li>
            <li><a href="equiposmayores.html">Equipos</a></li>
            <li><a href="partidosmayores.html">Partidos</a></li>
        </ul>
    </nav>
</div>
<section class= "contenedorTablaPrincipal">
    <!-- <div class="tablaJugadores"> -->
        <!-- <div class="encabezadoTablaEstadisticas">
            <h2>yardas de pase</h2> <button>ver todas</button>
        </div> -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <!-- <div class="contenidoTablaEstadisticas">
            <div class="primerLineaTablaJugadores">
                <div class="numero"><span>n</span></div>
                <div class="nombre"><span>nombre</span></div>
                <div class="equipo"><span>equipo</span></div>
                <div class="t"><span>t</span></div>
                <div class="td"><span>td</span></div>
                <div class="qbr"><span>qbr</span></div>
            </div>
            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div>

            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div>

            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div>

            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div>

            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div>

            <div class="lineaTablaJugadores">
                <div class="numero"><span>1</span></div>
                <div class="nombre"><img src="../imagenes/jugador.png" alt=""><span>tom brady</span></div>
                <div class="equipo"><span>OSP</span></div>
                <div class="t"><span>220</span></div>
                <div class="td"><span>18</span></div>
                <div class="qbr"><span>85.6</span></div>
            </div> -->
        <!-- </div> -->
    </div>
</section>

    <script>
        var tablasPreview = document.querySelectorAll('.sportspress');
        var tituloTablas = document.querySelectorAll('.sp-table-caption');
        for(var i=0; i<tablasPreview.length; i++){
            tablasPreview[i].className += " tablaJugadores";
        }
        for(var i=0; i<tituloTablas.length; i++){
            tituloTablas[i].className = "encabezadoTablaEstadisticas";
        }
        console.log(tablasPreview);

        /*CAMBIANDO ESTILOS CON JS A PESTAÑA ESTADISTICAS*/
        var primerLinea = document.querySelectorAll(".sp-player-list > thead > tr");
        for(var i=0; i<primerLinea.length; i++){
            primerLinea[i].style.height = "30px";
        }


        document.querySelector("#principal > section > div:nth-child(1) > div > div > table > thead > tr > th.data-passyds").innerHTML = "Yardas";
        document.querySelector("#principal > section > div:nth-child(2) > div > div > table > thead > tr > th.data-rushingyards").innerHTML = "Yardas";
        document.querySelector("#principal > section > div:nth-child(3) > div > div > table > thead > tr > th.data-receivingyards").innerHTML = "Yardas";

        var nombresJugadores = document.querySelectorAll('.data-name > a');
        
        var contenedorNombres = document.querySelectorAll('tbody > tr > .data-name');
        for(var i=0; i<contenedorNombres.length; i++){
            var etiquetaNombre = document.createElement("p");
            var textNombre = document.createTextNode(nombresJugadores[i].innerHTML);
            etiquetaNombre.appendChild(textNombre);

            contenedorNombres[i].appendChild(etiquetaNombre);
        }
        
        var contenedoresLinks = document.querySelectorAll('.encabezadoTablaEstadisticas');
        for(var i=0; i<contenedoresLinks.length; i++){
            var linkVerMas = document.createElement("a");
            var textVerMas = document.createTextNode("Ver mas");
            linkVerMas.appendChild(textVerMas);

            contenedoresLinks[i].appendChild(linkVerMas);
            //console.log(contenedoresLinks[i]);
        }
        /*var elementoPrueba = document.createElement("p");
        var textoElemento = document.createTextNode("esto es prueba");
        elementoPrueba.appendChild(textoElemento);
        document.querySelector('.tablaJugadores').appendChild(elementoPrueba);*/


        /*AGREGANDO URL A CADA LINK VER MAS*/
        document.querySelector("#principal > section > div:nth-child(1) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=top-passer-2019');

        document.querySelector("#principal > section > div:nth-child(2) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=estadisticas-yardas-de-corridas-2019');

        document.querySelector("#principal > section > div:nth-child(3) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=estadisticas-yardas-de-recepcion-2019');

        document.querySelector("#principal > section > div:nth-child(4) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=estadisticas-tackles-2019');

        document.querySelector("#principal > section > div:nth-child(5) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=estadisticas-sacks-2019');

        document.querySelector("#principal > section > div:nth-child(6) > h4 > a").setAttribute('href', 'http://faarg.arlud.com/?sp_list=estadisticas-ints-2019');


        /*PONGO LA PESTAÑA ACTIVA EN EL HEADER*/
        var ventanaActiva = document.querySelector("#menu-item-63139");
        ventanaActiva.className += " linkActivo";

    </script>

<?php get_footer(); ?>