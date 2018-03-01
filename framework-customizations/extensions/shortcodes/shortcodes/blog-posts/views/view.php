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
    }
//    $args = array(
//        'posts_per_page' => $posts_per_page,
//        'category' => $categories
//    );
//    $posts = get_posts($args);
    $args = array(
        'posts_per_page' => $posts_per_page,
        'category__in'   => $categories__in,
        'category__not_in' => $exclude_categories

    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
        <div class="st-full-width">
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-md-12">
                        <div class="st-blog-holder st-blog-standart">

                            <?php
                                while ( $query->have_posts() ) : $query->the_post();
                                    get_template_part( 'template-parts/content', 'blog-standart' );
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
