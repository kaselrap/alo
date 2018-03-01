<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        <div class="fw-col-md-8">
                            <div class="st-blog-holder st-blog-single st-blog-single-standart">
                                <?php
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_type() );

                                    the_post_navigation(array (
                                        'prev_text' => '<span class="st-prev-post">Previous Post</span><span class="st-prev-post-title">%title</span>',
                                        'next_text' => '<span class="st-next-post">Next Post</span><span class="st-next-post-title">%title</span>'
                                    ));

                                    if ( is_singular() )
                                        get_template_part('template-parts/content-related-post-by-category');
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;

                                endwhile; // End of the loop.
                                ?>
                            </div>
                        </div>
                        <div class="fw-col-md-4">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
