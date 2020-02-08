<aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-seccion">
                        <h3>Síguenos</h3>
                    </div>
                    <div class="redes-sociales">
                        <a class="youtube" href="http://www.youtube.com/falconmasters"><i class="icono fab fa-youtube"></i><span class="seguidores">90K</span></a>
                        <a class="facebook" href="http://www.facebook.com/falconmasters"><i class="icono fab fa-facebook-f"></i><span class="seguidores">90K</span></a>
                        <a class="twitter" href="http://www.twitter.com/falconmasters"><i class="icono fab fa-twitter"></i><span class="seguidores">3.5K</span></a>
                    </div>
                </div>
                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Suscribete</h3>
                        <form class="formulario" action="">
                            <label for="email">Suscribete a nuestro boletin</label>
                            <input type="email" id="email" placeholder="correo electronico" required>
                            <input type="submit" value="enviar">
                        </form>
                    </div>
                </div>
                <div class="widget ad">
                    <div class="contenedor-ad">
                        <a href=""><img src="<?php bloginfo('template_url'); ?> /img/1.jpg" alt="" width="200"></a>
                    </div>
                </div>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
            </aside>