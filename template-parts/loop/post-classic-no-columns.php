<?php
/**
 * Template part for displaying posts classic
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<div class="st-blog-holder st-blog-standart<?php echo ' ' . $options_data['blog_space_between_articles']; ?>">
    <?php
    if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'blog-standart' );

        endwhile;

        the_posts_pagination(array(
            'prev_text'    => __('<span class="icon-arrows-left"></span>'),
            'next_text'    => __('<span class="icon-arrows-right"></span>'),
        ));

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>
</div>