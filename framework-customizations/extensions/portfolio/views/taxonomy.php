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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/content-title'); ?>
                <div class="st-full-width">
                    <div class="fw-container">
                        <div class="fw-row">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post();?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('fw-col-md-4 fw-col-sm-6'); ?>>
                                        <div class="st-stg-img">
                                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>">
                                        </div>
                                        <div class="st-stg-text">
                                            <h4><?php echo get_the_title(); ?></h4>
                                            <ul>
                                                <?php
                                                $categories = get_the_terms( get_the_ID(), 'fw-portfolio-category' );
                                                foreach ($categories as $cat) : ?>
                                                    <li><a href="<?php echo get_category_link($cat) ?>"><span><?php echo $cat->name ?></span></a></li>
                                                    <?php echo ($categories[count($categories) - 1] == $cat) ? '' : '<span class="separator">&#47;</span>'; ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                        <a class="st-link" href="<?php echo get_post_permalink(); ?>"></a>
                                    </article>
                                <?php endwhile ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();