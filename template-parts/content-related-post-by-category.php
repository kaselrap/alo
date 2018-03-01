<?php
/**
 * Template part for displaying related posts by category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>

<?php
$original_posts = $post;
global $post;
$categories = get_the_category( $post->ID );
if ( $categories ) {
    $category_ids = array();
    foreach( $categories as $individual_category ) $category_ids[] = $individual_category->term_id;
    $args = array(
        'category__in' => $category_ids,
        'post__not_in' => array( $post->ID ),
        'posts_per_page'=> 3, // Number of related posts that will be shown.
        'caller_get_posts'=>1
    );
    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) : ?>
        <div class="st-related-posts">
            <div class="st-related-posts-title">
                <h2 class="entry-title">Related Posts</h2>
            </div>
            <div class="st-related-posts-inner">
                <div class="fw-container">
                    <div class="fw-row">
                        <?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            <div class="st-related-post fw-col-md-4 fw-col-sm-6 fw-col-xs-6">
                                <div class="st-related-post-image">
                                    <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="st-related-post-title">
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        <a href="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('F j, Y') ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
   <?php endif;
}
$post = $original_posts;
wp_reset_query();
?>
