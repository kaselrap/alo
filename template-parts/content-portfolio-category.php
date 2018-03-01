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

$category_list = fw_ext_portfolio_get_listing_categories('*');
if ( !empty($category_list) ): ?>
    <div class="st-filter filter-options">
        <button id="category-all">All</button>
        <?php foreach ($category_list as $category): ?>
            <button id="category-<?php echo $category->name; ?>" data-group="<?php echo $category->name; ?>"><?php echo $category->name; ?></button>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
