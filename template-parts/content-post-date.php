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

$data = get_the_date('F d, Y');

if ( !empty($data) ): ?>
    <div class="st-date-created">
        <a href="<?php echo get_the_date('Y-m-d'); ?>"><?php echo $data; ?></a>
    </div>
<?php endif; ?>