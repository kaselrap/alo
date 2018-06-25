<?php
/**
 * Template part for displaying posts format data
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<?php global $options_data; ?>
<div class="st-post-heading">
    <a href="<?php echo get_the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
    </a>
</div>