<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <section class="row single-post">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();{}?>
                <!-- Articulo -->
                <article class="col-sm-12 post">
                        <div class="contenedor">
                            <div class="thumb">
                            <?php if ( has_post_thumbnail() )
                                      { the_post_thumbnail('homepage-thumb'); }?>
                            </div>
                            <div class="info">
                                <h2 class="titulo"><?php the_title(); ?></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>                            
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                                <div class="texto"><?php echo the_content(); ?></div>
                            </div>
                        </div>
                    </article>
                    <section class=" col-sm-12">
                        <section class="comentarios">
                        <?php comments_template(); ?>
                        </section>        
                    </section>
                <?php endwhile; else : ?>
                 <!-- No hay Articulos -->
                 <article class="col-sm-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">El Post que buscas no existe</h2>
                                <div class="extracto">Revisa que la URL que hayas ingresado sea correcta</div>                         
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
                   
                </section>
            </section>
            <?php get_sidebar(); ?> 
        </div>
    </div>

    <?php get_footer(); ?>