<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ALO
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php get_template_part('template-parts/content-title'); ?>
            <div class="st-full-width">
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-md-12">
                            <div class="st-search-posts">
                                <?php
                                if ( have_posts() ) : ?>
                                    <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();

                                        /**
                                         * Run the loop for the search to output the results.
                                         * If you want to overload this in a child theme then include a file
                                         * called content-search.php and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', 'search' );

                                    endwhile;

                                    the_posts_navigation();

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
