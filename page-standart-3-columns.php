<?php
/*
  * Template name: Standart 3 Columns
  * */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/content-title'); ?>
            <?php
            if ( have_posts() ) : ?>
                <?php
                /* Start the Loop */
                $args = array(
                    'post_type' => 'fw-portfolio'
                );
                $loop = new WP_Query($args);
                ?>
            <div class="st-full-width">
                <div class="fw-container">
                    <div class="fw-row">
                        <?php if ( $loop->have_posts() ) : ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
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
            <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();