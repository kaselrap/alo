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

$tags = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'alo' ));

if ( !empty($tags) ): ?>
    <div class="st-post-info-tag">
        <?php echo $tags; ?>
    </div>
<?php endif; ?>