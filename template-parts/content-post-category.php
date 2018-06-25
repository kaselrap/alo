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
$category_list = get_the_category_list( esc_html__( ', ', 'alo' ));
if ( !empty($category_list) ): ?>
    <div class="st-post-info-category">
        <?php echo $category_list; ?>
    </div>
<?php endif; ?>
