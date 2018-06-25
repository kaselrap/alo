<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        get_template_part( 'template-parts/content-postformat', get_post_format() );
        get_template_part('template-parts/content-post-text');
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
