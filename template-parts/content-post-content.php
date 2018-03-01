<?php
/**
 * Template part for displaying post title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>

<?php
if ( is_singular() ) :
    the_content();
else : ?>
    <p><?php echo fw_get_db_post_option(get_the_ID(),'short_desc'); ?></p>
<? endif;
?>