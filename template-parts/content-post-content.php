<?php
/**
 * Template part for displaying post title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<?php global $options_data; ?>
<?php
if ( is_singular() && !is_page() ) :
    the_content();
else : ?>
    <p><?php echo fw_get_db_post_option(get_the_ID(),'short_desc'); ?></p>
<? endif;
?>