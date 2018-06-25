<?php
/**
 * Template part for displaying posts text
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<?php global $options_data; ?>
<div class="st-post-text">
    <div class="st-post-info-head">
        <?php if ( is_singular() && !is_page() ): ?>
            <?php get_template_part('template-parts/content-post-category'); ?>
        <?php else: ?>
            <div class="st-author-post">
                <span class="st-author-by">by</span>
                <span class="st-author"><?php echo get_the_author(); ?></span>
            </div>
            <?php
                get_template_part('template-parts/content-post-date');
                get_template_part('template-parts/content-post-category');
                get_template_part('template-parts/content-post-tags');
            ?>
        <?php endif; ?>
    </div>
    <div class="st-post-info-main">
        <?php get_template_part('template-parts/content-post-title'); ?>
        <div class="st-separator"></div>
<!--        --><?php //get_template_part('template-parts/content-post-content'); ?>
        <?php the_excerpt(); ?>
    </div>
    <div class="st-post-info-foot">
        <div class="st-post-info-foot-left">
            <?php if ( is_singular() && !is_page() ): ?>
                <?php get_template_part('template-parts/content-post-tags'); ?>
            <?php else: ?>
                <div class="st-read-more-btn">
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo __($options_data['blog_continue_reading_text'], 'alo'); ?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="st-post-info-foot-right"></div>
    </div>
</div>
