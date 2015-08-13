<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

<section role="main" class="portada">

	<!-- Flexslider vía OT -->
	<?php get_template_part( 'content', 'flexslider-ot' ); ?>
    
    <?php $bloques_en_tres = get_ot('bloqueentres', array()); ?>
    <?php if($bloques_en_tres) : ?>
    <div class="bloques-en-tres">
        <?php foreach ($bloques_en_tres as $bloque ) { ?>
            <a href="<?php echo $bloque['link']; ?>">
                <div class="bloque">
                    <figure>
                        <img src="<?php echo $bloque['image']; ?>" alt="<?php echo $bloque['title']; ?>">
                    </figure>
                    <h3><?php echo $bloque['title']; ?></h3>
                    <p>
                        <?php echo $bloque['description']; ?>
                    </p>
                </div>
            </a>
        <?php } ?>
    </div>
    <?php endif; ?>
    <!-- Artículos en portada -->
    <?php 
        $catid = get_ot('categoria_portada', ''); 
        $post_per_page = get_ot('numero_categoria_portada', ''); 
        //Consulta
        $args = array( 
            'cat' => $catid, 
            'posts_per_page' => $post_per_page, 
            'paged' => get_query_var('paged'), 
            );
        $consulta = new WP_Query( $args );
    ?> 
    <?php if ( $consulta ->have_posts() ) :   ?>
        <section class="articulos">
            
            <a class="articulos-titulo" href="#">
                <?php print_ot('titulo_categoria_portada', ''); ?>
            </a>
            
            <?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>                         
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>                

            <?php the_numbered_nav(); ?>        

        </section>

    <?php endif; ?>
	<?php wp_reset_query(); ?>        
          
</section><!-- .portada -->

<?php get_footer(); ?>