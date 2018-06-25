<?php
/**
 * Template part for displaying post format video
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<?php global $options_data; ?>
<div class="st-post-heading">
    <?php
        $iframe = wp_oembed_get(fw_get_db_post_option(get_the_ID(),'post__video'));
        echo $iframe;
    ?>
</div>