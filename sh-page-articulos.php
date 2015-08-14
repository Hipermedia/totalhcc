<?php
/**
 * Template Name: Artículos
 * Description: Permite crear una página de resumen de categoría obteniéndola vía ACF
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>
<?php //Query para la categoría seleccionada                    
$args = array( 'cat' => 2, 'posts_per_page' => 3, 'paged' => get_query_var('paged'), );
$consulta = new WP_Query( $args );?>          
<?php if ( $consulta ->have_posts() ) :   ?>
    <section class="custom-articulos">
        <h2 class="titulo-categoria"><?php echo get_cat_name(2); ?></h2>
        <?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
            <article class="articulo-resumen">
                <?php if ( has_post_thumbnail() ) { ?>
                    <figure class="entry-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </figure>
                <?php } ?>
                <div class="content-resto-articulo">
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                    <h4 class="entry-autor">Publicado por <?php the_author(); ?></h4>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
    <!-- PAGINACIÓN CUSTOM QUERIES -->
    <?php the_custom_numbered_nav( $consulta ); ?>   
<?php endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>