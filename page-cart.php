<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/content-title'); ?>
            <div class="st-shop-products st-full-width">
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-md-12">

                            <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'home' );

                            endwhile; // End of the loop.
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php
get_footer();
