<?php
/**
 * Template part for displaying post title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<ul>
    <?php
    $categories = get_the_terms( get_the_ID(), 'fw-portfolio-category' );
    foreach ($categories as $cat) : ?>
    <li><a href="<?php echo get_category_link($cat) ?>"><span><?php echo $cat->name ?></span></a></li>
    <?php echo ($categories[count($categories) - 1] == $cat) ? '' : '<span class="separator">&#47;</span>';
    endforeach; ?>
</ul>