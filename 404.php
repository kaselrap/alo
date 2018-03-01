<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ALO
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="fw-container-fluid">
                <div class="fw-row">
                    <div class="fw-col-md-12">
                        <div class="st-error-404 st-not-found">
                            <div class="st-not-found-inner">
                                <div class="st-404">
                                    <h2 class="st-404-title">
                                        <?php echo __('404', 'alo'); ?>
                                    </h2>
                                </div>
                                <div class="st-page-not-found">
                                    <h4 class="st-page-not-found-title">
                                        <?php echo __('page not found', 'alo'); ?>
                                    </h4>
                                </div>
                                <p class="st-not-found-text">
                                    <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alo' ); ?>
                                </p>
                                <div class="st-back-to-home-btn">
                                    <a href="<?php echo get_home_url(); ?>" class="st-btn st-not-found-btn">Back to home</a>
                                </div>
                            </div>
                        </div><!-- .error-404 -->
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
