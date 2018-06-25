<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<?php
//fw_print($atts);
    global $post;
    if ( isset( $atts ) ) {
        if ( isset( $atts['posts_per_page'] ) && !empty($atts['posts_per_page']) ) {
            $posts_per_page = ( $atts['posts_per_page'] == 'all' ) ? -1 : $atts['posts_per_page'];
        }
        if ( isset ( $atts['categories'] ) && !empty($atts['categories']) ) {
            $categories__in = $atts['categories'];
        }
        if ( isset ( $atts['exclude_categories'] ) && !empty($atts['exclude_categories']) ) {
            $exclude_categories = $atts['exclude_categories'];
        }
        if ( isset( $atts['pagination'] ) && isset( $atts['scrolling'] ) ) {
            $pagination = ( $atts['pagination'] == 'yes' ) ? true : false;
            $type_pagination = $atts['scrolling'];
        }
        if ( isset ( $atts['layout'] ) ) {
            $layout = $atts['layout'];
            if ( $layout == 'large' ) {
                $layout = 'large';
            } else if ( $layout == 'large-alternate' ) {
                $layout = 'large-alternate';
            }
        }
    }
//    $args = array(
//        'posts_per_page' => $posts_per_page,
//        'category' => $categories
//    );
//    $posts = get_posts($args);
    $args = array(
        'posts_per_page'   => $posts_per_page,
        'post_status'      => 'publish',
        'category__in'     => $categories__in,
        'category__not_in' => $exclude_categories
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
        <div class="st-full-width">
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-md-12">
                        <div class="st-blog-holder st-masonry st-three-columns"
                             <?php if (isset ( $posts_per_page )): ?>data-posts-per-page="<?php echo $posts_per_page; ?>"<?php endif; ?>
                             <?php if (isset ( $categories__in )): ?>data-category-in="<?php echo implode(',', $categories__in); ?>"<?php endif; ?>
                             <?php if (isset ( $exclude_categories )): ?>data-category-not-in="<?php echo implode(',', $exclude_categories); ?>"<?php endif; ?>
                             data-max-num-page="<?php echo $query->max_num_pages; ?>"
                             data-next-page="<?php echo get_query_var( 'paged' ) ? get_query_var('paged') : 1 ?>"
                        >
                            <div class="st-masonry-gutter"></div>
                            <div class="st-masonry-sizer"></div>
                            <?php
                                while ( $query->have_posts() ) : $query->the_post();
                                    get_template_part( 'template-parts/content', 'blog-standart' );
//                                    get_template_part('template-parts/loop/post', $options_data['blog_layout']);
                                endwhile;
                                the_posts_pagination(array(
                                    'prev_text'    => __('<span class="icon-arrows-left"></span>'),
                                    'next_text'    => __('<span class="icon-arrows-right"></span>'),
                                ));
                            ?>
                            <a href="#" target="_self" class="st-load-more st-btn st-btn-solid" style="">Load More</a>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
