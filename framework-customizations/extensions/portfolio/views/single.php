<?php
if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
get_header(); ?>

<?php global $options_data; ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/content-title'); ?>
            <div class="st-full-width">
                <div class="<?php echo ( $options_data['portfolio_single_wide'] == 0 ) ? 'fw-container' : 'fw-container-fluid'; ?>">
                    <div class="fw-row">
                        <div class="fw-col-md-12">
                            <?php get_template_part('template-parts/loop/portfolio-single', 'classic'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();