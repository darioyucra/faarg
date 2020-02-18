<?php /* Template Name:Roster*/ ?>
<?php get_header(); ?>
<div class="espacioNoticias">

</div>
            
            <div class="bannerSection">
                <!-- <h2>Osos polares</h2> -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php endwhile; endif; ?>
            </div>
            <div class="bannerSlider">
                <button class="btnSlider" id="btnSliderIzq"><i class="fas fa-chevron-left"></i></button>
                <button class="btnSlider" id="btnSliderDer"><i class="fas fa-chevron-right"></i></button>
                <div class="contenedorImagenesLogos">
                <ul class="columnaLogos logosActivo" id="columnaLogo1">
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-osos-polares-2019"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/OSP.png" alt=""></a></li>
                    <li><a href="http://faarg.arlud.com/?sp_list=roster-tiburones-2019&"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/TIB.png" alt=""></a></li>
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
                <ul class="columnaLogos logosInactivo" id="columnaLogo4">
                    <!-- <li><a href="#"><img src="/imagenes/escudos/corsarios.png" alt=""></a></li> -->
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/VAL.png" alt=""></a></li>
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/TIG.png" alt=""></a></li>
                    <li><a href="http://localhost/faarg/index.php/roster-osos-polares-2019/"><img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/MED.png" alt=""></a></li>
                </ul>
                </div>
                 
            </div>
            <div class="contenidoRoster">
                <section class="contenedorTablaRoster">
                    <article class="tablaRoster">
                        <div class="encabezadoRoster">
                            <div class="logoRoster">
                                <img src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/OSP.png" alt="">
                            </div>
                            <div class="textEncabezadoRoster">
                                <h2>Osos Polares</h2>
                                <span>Fundado 2000</span>
                                <p>Sitio web: <a href="#">www.osospolares.com</a></p>
                            </div>
                            <div class="redesEncabezadoRoster">
                                <nav>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="gridTabla">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                        <script>
                            var nJugador = document.querySelector('thead tr .data-number');
                            nJugador.innerHTML = 'N';

                            var nombreJugador = document.querySelector('thead tr .data-name');
                            nombreJugador.innerHTML = 'Jugador';

                            var nombreEquipo = document.querySelector('thead tr .data-team');
                            nombreEquipo.innerHTML = 'Equipo';

                            var posicion = document.querySelector('thead tr .data-position');
                            posicion.innerHTML = 'Posición';

                        </script>
                        </div>
                    </article>
                </section>
                <aside class="asideRoster">
                    <div class="estadisticasRoster">
                        <div class="encabezadoAsideRoster">
                            <h2>Estadisticas</h2>
                            <a href="#">Ver Todos</a>
                        </div>
                        <div class="contenidoEstadisticasRoster">
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="pasesT">270.4</span><span class="fila2EstRost">Pases</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="corridasT">270.4</span><span class="fila2EstRost">Corridas</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="tacklesT">270.4</span><span class="fila2EstRost">Tackles</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="touchdownT">270.4</span><span class="fila2EstRost">TouchDown</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="intsT">270.4</span><span class="fila2EstRost">Ints</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="puntosFavorT">270.4</span><span class="fila2EstRost">Pnts a favor</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="fumblesT">270.4</span><span class="fila2EstRost">Fumbles</span><span class="fila3EstRost">1º</span></div>
                            <div class="columnaEstadisticasRoster"><span class="fila1EstRost" id="sacksT">270.4</span><span class="fila2EstRost">Sacks</span><span class="fila3EstRost">1º</span></div>
                        </div>
                    </div>
                    <div class="calendarioRoster">
                        <div class="encabezadoAsideRoster">
                            <h2>Calendario 2019</h2>
                            <a href="#">Ver todos</a>
                        </div>
                        <div class="contenidoCalendarioRoster">

                            <?php 
                            /*echo do_shortcode( '[event_blocks id="62502" title="" event="" team="59786" league="15" season="16" venue="0" status="any" format="all" date="0" date_from="default" date_to="default" date_past="" date_future="" date_relative="0" day="" number="-1" orderby="default" order="default" show_all_events_link="0" align="none]' );*/
                            ?>
                            <!--<div class="fila1CalendarioRoster">
                                <div class="s"><span>s</span></div>
                                <div class="contra"><span>Contra</span></div>
                                <div class="resultado"><span>Resultado</span></div>
                                <div class="fechaC"><span>Fecha</span></div>
                                <div class="horaC"><span>Hora</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>01</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>02</span></div>
                                <div class="contra"><span>Semana Libre</span></div>
                                <div class="resultado"><span>-</span></div>
                                <div class="fechaC"><span>-</span></div>
                                <div class="horaC"><span>-</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>03</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>04</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>05</span></div>
                                <div class="contra"><span>Semana Libre</span></div>
                                <div class="resultado"><span>-</span></div>
                                <div class="fechaC"><span>-</span></div>
                                <div class="horaC"><span>-</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>06</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>07</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>08</span></div>
                                <div class="contra"><span>Semana Libre</span></div>
                                <div class="resultado"><span>-</span></div>
                                <div class="fechaC"><span>-</span></div>
                                <div class="horaC"><span>-</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>09</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>10</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>11</span></div>
                                <div class="contra"><span>Semana Libre</span></div>
                                <div class="resultado"><span>-</span></div>
                                <div class="fechaC"><span>-</span></div>
                                <div class="horaC"><span>-</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>12</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>13</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>14</span></div>
                                <div class="contra"><span>Semana Libre</span></div>
                                <div class="resultado"><span>-</span></div>
                                <div class="fechaC"><span>-</span></div>
                                <div class="horaC"><span>-</span></div>
                            </div>
                            <div class="filaCalendarioRoster">
                                <div class="s"><span>15</span></div>
                                <div class="contra"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                                <div class="resultado"><span>32-13</span></div>
                                <div class="fechaC"><span>23/03/2019</span></div>
                                <div class="horaC"><span>10:00 AM</span></div>
                                
                            </div>-->
                            
                        </div>
                    </div>
                    <!--<div class="ultimoPartidoRoster">
                        <div class="encabezadoAsideRoster">
                            <h2>Ultimo partido</h2>
                            <a href="#">Ver todos</a>
                        </div>
                        <div class="contenidoUltimoPartidoRoster">
                            <div class="equipoRoster"><img src="../imagenes/ososG.png" alt=""><span>Osos</span></div>
                            <div class="resultadoRoster"><span class="flecha fActiva"><i class="fas fa-caret-right"></i></span><span class="valorRR"><strong>107</strong> - 102</span><span class="flecha"><i class="fas fa-caret-left"></i></span></div>
                            <div class="equipoRoster"><img src="../imagenes/tiburonesG.png" alt=""><span>Tiburones</span></div>
                        </div>
                        <div class="primerLineaUP">
                            <div class="puntosR"><span>Puntos</span></div>
                            <div class="c1"><span>1</span></div>
                            <div class="c2"><span>2</span></div>
                            <div class="c3"><span>3</span></div>
                            <div class="c4"><span>4</span></div>
                            <div class="f"><span>f</span></div>
                        </div>
                        <div class="lineaUP">
                            <div class="puntosR"><span>Osos</span></div>
                            <div class="c1"><span>16</span></div>
                            <div class="c2"><span>7</span></div>
                            <div class="c3"><span>7</span></div>
                            <div class="c4"><span>3</span></div>
                            <div class="f"><span>33</span></div>
                        </div>
                        <div class="lineaUP">
                            <div class="puntosR"><span>Tiburones</span></div>
                            <div class="c1"><span>7</span></div>
                            <div class="c2"><span>0</span></div>
                            <div class="c3"><span>0</span></div>
                            <div class="c4"><span>6</span></div>
                            <div class="f"><span>13</span></div>
                        </div>
                    </div>-->
                    <div class="trofeosRoster">
                        <div class="encabezadoAsideRoster">
                            <h2>Trofeos</h2>
                            <!-- <a href="#">ver todos</a> -->
                        </div>
                        <div class="contenidoTrofeosRoster">
                            <div class="imagenesTrofeos">
                                <div class="trofeo trofeoInicialActivo" id="trofeo1">
                                    <img src="../imagenes/trofeos.png" alt="">
                                    <h3>BIG LEAGUE CHAMPIONS 1</h3>
                                    <span>DECEMBER 2012</span>
                                </div>
                                <div class="trofeo trofeoInicialInactivo" id="trofeo2">
                                    <img src="../imagenes/trofeo2.png" alt="">
                                    <h3>BIG LEAGUE CHAMPIONS 2</h3>
                                    <span>DECEMBER 2012</span>
                                </div>
                                <div class="trofeo trofeoInicialInactivo" id="trofeo3">
                                    <img src="../imagenes/trofeo3.png" alt="">
                                    <h3>BIG LEAGUE CHAMPIONS 3</h3>
                                    <span>DECEMBER 2012</span>
                                </div>
                            </div>
                            <div class="botonera1AsideRoster">
                                <ul>
                                    <li><button id="btnTrofeoAtras"><i class="fas fa-chevron-left"></i></button></li>
                                    <li><button id="btnTrofeoSiguiente"><i class="fas fa-chevron-right"></i></button></li>
                                </ul>
                            </div>
                            <div class="botonera2AsideRoster">
                                <ul>
                                    <li><button id="btnRAR1" class="btnAsideActivo"><i class="fas fa-circle"></i></button></li>
                                    <li><button id="btnRAR2"><i class="fas fa-circle"></i></button></li>
                                    <li><button id="btnRAR3"><i class="fas fa-circle"></i></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="jugadoresRoster">
                        <div class="encabezadoAsideRoster">
                            <h2>Jugadores</h2>
                            <a href="#">Ver todos</a>
                        </div>
                        <div class="contenidoJugadoresRoster">
                            <div class="tipoJugadores">
                                <button class="claseJugador tipoJugadorActivo">Offense</button>
                                <!-- <button class="claseJugador">Defense</button> -->
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas de pase</span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>                            
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Quarterback</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas de corrida </span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Corredor</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas por recepción</span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Receptor</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                            <div class="tipoJugadores">
                                <!-- <button class="claseJugador tipoJugadorActivo">Offense</button> -->
                                <button class="claseJugador">Defense</button>
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas de pase</span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>                            
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Quarterback</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas de corrida </span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Corredor</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                            <div class="linea1JugadoresAside">
                                <div class="yardasAside"><span>Yardas por recepción</span></div>
                                <div class="ydsAside"><span>yds</span></div>
                                <div class="tdAside"><span>td</span></div>
                                <div class="qbrAside"><span>qbr</span></div>
                            </div>
                            <div class="lineaJugadoresAside">
                                <div class="yardasAside"><img src="../imagenes/jugador.png" alt=""><span><strong>Steven Masterson</strong>Receptor</span></div>
                                <div class="ydsAside"><span>2201</span></div>
                                <div class="tdAside"><span>18</span></div>
                                <div class="qbrAside"><span>85.6</span></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

    <script>
    

    //VARIABLES DE TABLA
    var pases = document.getElementsByClassName('data-passyds');
    var corridas = document.getElementsByClassName('data-rushingyards');
    var tackles = document.getElementsByClassName('data-tackles');
    var touchdown1 = document.getElementsByClassName('data-passingtd');
    var touchdown2 = document.getElementsByClassName('data-rushingtd');
    var touchdown3 = document.getElementsByClassName('data-specialteamstd');
    var ints = document.getElementsByClassName('data-interceptionsthrown');
    var puntosFavor = document.getElementsByClassName('');
    var fumbles = document.getElementsByClassName('data-forcedfumbles');
    var campoSacks = document.getElementsByClassName('data-sacks');



    var totalSacks = 0;
    var totalPases = 0;
    var totalCorridas = 0;
    var totalTackles = 0;
    var totalTouchdown = 0;
    var totalInts = 0;
    var totalPuntosFavor = 0;
    var totalFumbles = 0;

    for(i=1; i<pases.length; i++){
        totalPases = totalPases + parseInt(pases[i].innerHTML);
    }
    console.log('El total de pases es: ' + totalPases);


    for(i=1; i<corridas.length; i++){
        totalCorridas = totalCorridas + parseInt(corridas[i].innerHTML);
    }
    console.log('El total de corridas es: ' + totalCorridas);


    for(i=1; i<tackles.length; i++){
        totalTackles = totalTackles + parseInt(tackles[i].innerHTML);
    }
    console.log('El total de tackles es: ' + totalTackles);


    for(i=1; i<touchdown1.length; i++){
        totalTouchdown = totalTouchdown + parseInt(touchdown1[i].innerHTML);
    }
    console.log('El total de td1 es: ' + totalTouchdown);


    for(i=1; i<touchdown2.length; i++){
        totalTouchdown = totalTouchdown + parseInt(touchdown2[i].innerHTML);
    }
    console.log('El total de td2 es: ' + totalTouchdown);


    for(i=1; i<touchdown3.length; i++){
        totalTouchdown = totalTouchdown + parseInt(touchdown3[i].innerHTML);
    }
    console.log('El total de td3 es: ' + totalTouchdown);


    for(i=1; i<ints.length; i++){
        totalInts = totalInts + parseInt(ints[i].innerHTML);
    }
    console.log('El total de ints es: ' + totalInts);


    for(i=1; i<puntosFavor.length; i++){
        totalPuntosFavor = totalPuntosFavor + parseInt(puntosFavor[i].innerHTML);
    }
    console.log('El total de puntos a favor es: ' + totalPuntosFavor);


    for(i=1; i<fumbles.length; i++){
        totalFumbles = totalFumbles + parseInt(fumbles[i].innerHTML);
    }
    console.log('El total de fumbles es: ' + totalFumbles);

    for(i=1; i<campoSacks.length; i++){
        totalSacks =totalSacks + parseInt(campoSacks[i].innerHTML);
    }
    //alert("El total de Sacks es: " + totalSacks);
    console.log('El total de sacks es: ' + totalSacks);

    var campo1 = document.querySelector('#pasesT');
    var campo2 = document.querySelector('#corridasT');
    var campo3 = document.querySelector('#tacklesT');
    var campo4 = document.querySelector('#touchdownT');
    var campo5 = document.querySelector('#intsT');
    var campo6 = document.querySelector('#puntosFavorT');
    var campo7 = document.querySelector('#fumblesT');
    var campo8 = document.querySelector('#sacksT');

    var contenedorCampos = [campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8];

    var contenedorTotales = [totalPases, totalCorridas, totalTackles, totalTouchdown, totalInts, totalPuntosFavor, totalFumbles, totalSacks];

    for(i=0; i<contenedorCampos.length; i++){
        contenedorCampos[i].innerHTML = contenedorTotales[i];
    }


    /*CODIGO PARA VER DE QUE EQUIPO ES EL ROOSTER Y MODIFICAR EL CONTENIDO*/
    var contEncabezadoRoster = document.querySelector('.encabezadoRoster');
    var tituloEncabezado = document.querySelector('.textEncabezadoRoster > h2');
    var logoEncabezado = document.querySelector('.logoRoster img');
    var textReferencia = document.querySelector('.bannerSection h2').innerHTML;
    var validarOsos = textReferencia.indexOf("Osos Polares");
    var validarTiburones = textReferencia.indexOf("Tiburones");
    var validarCruzados = textReferencia.indexOf("Cruzados");
    var validarCorsarios = textReferencia.indexOf("Corsarios");
    var validarJabalies = textReferencia.indexOf("Jabalies");
    var validarLegionarios = textReferencia.indexOf("Legionarios");
    var validarAztecas = textReferencia.indexOf("Aztecas");
    var validarCoyotes = textReferencia.indexOf("Coyotes");
    var validarYacares = textReferencia.indexOf("Yacares");
    var validarEstadisticas1 = textReferencia.indexOf("Estadísticas");
    var validarEstadisticas2 = textReferencia.indexOf("Estadisticas"); 


    if(validarOsos !== -1){
        //contEncabezadoRoster.style.backgroundColor = 'be0000';
        contEncabezadoRoster.style.backgroundColor = '#003B75';
        tituloEncabezado.innerHTML = 'Osos Polares';
    }else if(validarTiburones !== -1){
        contEncabezadoRoster.style.backgroundColor = '#be0000';
        tituloEncabezado.innerHTML= 'Tiburones';
        logoEncabezado.src = '<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/TIB.png';
    }else if(validarCruzados !== -1){
        contEncabezadoRoster.style.backgroundColor = '#316f7e';
        tituloEncabezado.innerHTML= 'Cruzados';
        logoEncabezado.src = '<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/CRU.png';
    }else if(validarCorsarios !== -1){
        contEncabezadoRoster.style.backgroundColor = '#000';
        tituloEncabezado.innerHTML= 'Corsarios';
        logoEncabezado.src = '<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/COR.png';
    }else if(validarJabalies !== -1){
        contEncabezadoRoster.style.backgroundColor = '#de232c';
        tituloEncabezado.innerHTML= 'Jabalies';
        logoEncabezado.src = '<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/JAV.png';
    }else if(validarLegionarios !== -1){
        contEncabezadoRoster.style.backgroundColor = '#000';
        tituloEncabezado.innerHTML= 'Legionarios';
        logoEncabezado.src = '<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/LEG.png';
    }else if(validarAztecas !== -1){
        contEncabezadoRoster.style.backgroundColor ="#c9c87f";
        tituloEncabezado.innerHTML = "Aztecas";
        logoEncabezado.src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/AZT.png"
    }else if(validarCoyotes !== -1){
        contEncabezadoRoster.style.backgroundColor ="#edc525";
        tituloEncabezado.innerHTML = "Coyotes";
        logoEncabezado.src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/COY.png"
    }else if(validarYacares !==-1){
        contEncabezadoRoster.style.backgroundColor ="#003409";
        tituloEncabezado.innerHTML = "Yacares";
        logoEncabezado.src="<?php bloginfo('template_url'); ?>/imagenes/escudos/logos/YAC.png"
    }
    else if(validarEstadisticas1 !== -1){
        var asideRoster = document.querySelector('.asideRoster');
        asideRoster.style.display = "none";

        var tablaEstadisticas = document.querySelector('.contenedorTablaRoster');
        tablaEstadisticas.style.width = "100%";

        var encabezadoRoster = document.querySelector('.encabezadoRoster');
        encabezadoRoster.style.display = "none";
        document.querySelector('.bannerSlider').style.display = "none";
        document.querySelector('.sp-table-caption').style.backgroundColor = "#003B75";
        document.querySelector('.sp-table-caption').style.color = "#fff";
    }

    

    /*CUADRO DE FIXTURE*/
    var fixture = document.querySelector('.sp-template-event-blocks');
    var contenedorFixture = document.querySelector('.contenidoCalendarioRoster');
    contenedorFixture.appendChild(fixture);
    
    </script>

<?php get_footer(); ?>