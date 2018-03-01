<?php
/**
 * Template part for displaying gallery post format
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<div class="st-post-heading">
    <?php $imgs =  fw_get_db_post_option(get_the_ID(),'gallery_images'); ?>
    <div class="st-post-gallery owl-carousel">
        <?php if ( is_singular() ) : ?>
            <?php foreach ($imgs as $img) : ?>
                <a href="<?php echo $img['url']; ?>" data-rel="prettyPhoto[gallery-<?php echo get_the_ID(); ?>]">
                    <img src="<?php echo $img['url']; ?>">
                </a>
            <?php endforeach; ?>
       <?php else : ?>
            <?php foreach ($imgs as $img) : ?>
                <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php echo $img['url']; ?>">
                </a>
            <?php endforeach; ?>
        <? endif; ?>
    </div>
</div>