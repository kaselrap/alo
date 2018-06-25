<?php
/**
 * The template for displaying archive pages
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
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-md-12">
                            <div class="st-blog-holder st-blog-standart">
                                <?php
                                if ( have_posts() ) :

                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();

                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', 'blog-standart' );
//                                        get_template_part( 'template-parts/content', get_post_format() );

                                    endwhile;

                                    the_posts_pagination(array(
                                        'prev_text'    => __('<span class="icon-arrows-left"></span>'),
                                        'next_text'    => __('<span class="icon-arrows-right"></span>'),
                                    ));

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
