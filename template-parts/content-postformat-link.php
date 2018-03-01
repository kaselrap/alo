<?php
/**
 * Template part for displaying posts standart
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<div class="st-post-heading">
    <div class="st-post-info-main">
        <span class="fa fa-link st-quote"></span>
        <?php if ( is_singular() ) : ?>
            <span class="st-title-link">
                <p><?php echo fw_get_db_post_option(get_the_ID(),'post_link'); ?></p>
            </span>
        <?php else : ?>
            <a href="<?php echo get_the_permalink(); ?>" class="st-title-link">
                <p><?php echo fw_get_db_post_option(get_the_ID(),'post_link'); ?></p>
            </a>
        <? endif; ?>
    </div>
</div>