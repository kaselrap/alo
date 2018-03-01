<?php
/**
 * Template part for displaying posts text
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
<div class="st-portfolio-text">
    <div class="fw-row">
        <?php if ( isset ( $small ) ) : ?>
            <div class="st-portfolio-content">
                <?php get_template_part('template-parts/content-post-title'); ?>
                <div class="st-separator"></div>
                <?php get_template_part('template-parts/content-post-content'); ?>
            </div>
            <div class="st-portfolio-info-item">
                <h4>Category:</h4>
                <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
            </div>
            <div class="st-portfolio-info-item">
                <h4>Photographer:</h4>
                <span><?php echo get_the_author(); ?></span>
            </div>
            <div class="st-portfolio-info-item">
                <h4>Year:</h4>
                <span><?php echo get_the_date('Y'); ?></span>
            </div>
            <div class="st-portfolio-info-item st-portfolio-share">
                <h4>Share:</h4>
                <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
            </div>
        <?php else: ?>
            <div class="fw-col-md-8">
                <div class="st-portfolio-content">
                    <?php get_template_part('template-parts/content-post-title'); ?>
                    <div class="st-separator"></div>
                    <?php get_template_part('template-parts/content-post-content'); ?>
                </div>
            </div>
            <div class="fw-col-md-4">
                <div class="st-portfolio-info-item">
                    <h4>Category:</h4>
                    <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
                </div>
                <div class="st-portfolio-info-item">
                    <h4>Photographer:</h4>
                    <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
                </div>
                <div class="st-portfolio-info-item">
                    <h4>Year:</h4>
                    <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
                </div>
                <div class="st-portfolio-info-item st-portfolio-share">
                    <h4>Share:</h4>
                    <?php get_template_part('template-parts/content-portfolio-single-category'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
