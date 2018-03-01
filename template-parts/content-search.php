<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('st-search-post'); ?>>
    <div class="st-search-title">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </div>
    <?php if ( 'post' === get_post_type() ) : ?>
        <div class="st-meta">
            <div class="st-author-post">
                <span class="st-author-by">by</span>
                <span class="st-author"><?php echo get_the_author(); ?></span>
            </div>
            <?php
                get_template_part('template-parts/content-post-date');
            ?>
        </div><!-- .entry-meta -->
    <?php endif; ?>
	<div class="st-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
    <a href="<?php echo get_the_permalink(); ?>" class="st-read-more"><?php echo __('Read More', 'alo'); ?></a>
</article><!-- #post-<?php the_ID(); ?> -->
