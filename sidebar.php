<aside class="columnaDerecha">
    
                <div class="botoneraAside">
                    <button class="btnAsideActivo" id="btnMayores">Mayores</button>
                    <button id="btnJuveniles">Juveniles</button>
                    <button id="btnFlag">Flag</button>
                </div>
                <div id="sidebar-primary" class="sidebar">
                <?php if ( is_active_sidebar( 'widgets-derecha' ) ) : ?>
                    <?php dynamic_sidebar( 'widgets-derecha' ); ?>
                <?php else : ?>
                    <!-- Time to add some widgets! -->
                <?php endif; ?>
                </div>

                <div class="asideRedes asideRedesOff" id="asideRedesVertical">
                    <div class="filaRedes filafb">
                        <span class="iconFilaRedes"><i class="fab fa-facebook-f"></i></span>
                        <p><strong>Seguinos en facebook</strong> 10.0218 likes</p>
                        <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                        <a href="#"></a>
                    </div>
                    <div class="filaRedes filaig">
                        <span class="iconFilaRedes"><i class="fab fa-instagram"></i></span>
                        <p><strong>Seguinos en instagram</strong> 3.304 seguidores</p>
                        <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                        <a href="#"></a>
                    </div>
                    <div class="filaRedes filatw">
                        <span class="iconFilaRedes"><i class="fab fa-twitter"></i></span>
                        <p><strong>Seguinos en twitter</strong> 1.200 seguidores</p>
                        <span class="iconMasFilaRedes"><i class="fas fa-plus"></i></span>
                        <a href="#"></a>
                    </div>
                    <div class="filaRedes filayt">
                        <span class="iconFilaRedes"><i class="fab fa-youtube"></i></span>
                        <p><strong>Seguinos en youtube</strong> 489 suscriptores</p>
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
                
</aside>