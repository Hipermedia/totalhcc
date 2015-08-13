<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>

<article class="articulos">

    <h2 class="titulo">
        <a href="<?php the_permalink(); ?>" rel="bookmark" alt="Enlace a <?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php if(!is_home()) { ?>
        <div class="meta">
           <?php the_custom_meta(); ?>
        </div>
    <?php } ?>
    
    <div class="resumen">
        <?php if ( has_post_thumbnail() ) { ?>
            <?php if(!is_home()) { ?>
                <figure class="thumb">
                    <?php the_post_thumbnail('medium'); ?>
                </figure>
            <?php } ?>
        <?php } ?>
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <?php if(is_home()) { ?>
        <div class="meta">
           <?php the_custom_meta(); ?>
        </div>
    <?php } ?>
    
</article>