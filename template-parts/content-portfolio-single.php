<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<?php
    if ( isset ( $options_data['portfolio_single_layout'] ) ) {
        $name_layout = strtok($options_data['portfolio_single_layout'], '-');
        if ( $name_layout == 'small' ) {
            $small = true;
        }
    }
?>
<div class="fw-row">
    <div class="<?php echo ( isset ($small) ) ? 'fw-col-md-8' : 'fw-col-md-12'; ?>">
        <?php get_template_part('template-parts/content-portfolio-single', 'images'); ?>
    </div>
    <div class="<?php echo ( isset($small) ) ? 'fw-col-md-4' : 'fw-col-md-12'; ?>">
        <?php get_template_part('template-parts/content-portfolio-single', 'text'); ?>
    </div>
</div>
<?php
    the_post_navigation(array (
        'prev_text' => '<span class="st-prev-post icon-arrows-left"></span><span class="st-prev-post-label">Prev</span>',
        'next_text' => '<span class="st-next-post-label">Next</span><span class="st-next-post icon-arrows-right"></span>'
    ));
