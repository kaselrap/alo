<?php
/**
 * Template part for displaying posts classic
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<?php
    $categories = fw_ext_portfolio_get_listing_categories('');
    if ( isset($options_data['portfolio_space_between_articles']) ) {
        $space = 'st-' . $options_data['portfolio_space_between_articles'];
    }
    if ( isset($options_data['portfolio_layout']) ) {
        $columns = preg_replace('/[^0-9]/', '', $options_data['portfolio_layout']);
        switch ( $columns ) {
            case 2:
                $portfolio_layout = 'st-two-columns';
                break;
            case 3:
                $portfolio_layout = 'st-three-columns';
                break;
            case 4:
                $portfolio_layout = 'st-four-columns';
                break;
            case 5:
                $portfolio_layout = 'st-five-columns';
                break;
            default :
                break;
        }
        $name_layout = strtok($options_data['portfolio_layout'], '-');
        if ( $name_layout == 'pinterest' ) {
            $masonry = 'st-masonry';
        }
    }
?>
<?php if( isset ( $categories ) ) : ?>
    <div class="st-category-list">
        <div class="st-category-item active" data-filter="all">
            All
        </div>
        <?php foreach ($categories as $cat): ?>
            <div class="st-category-item" data-filter="<?php echo $cat->slug; ?>">
                <?php echo $cat->name; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="st-blog-holder st-blog-standart<?php if ( isset( $masonry ) ) echo ' ' . $masonry; ?><?php if ( isset( $space ) ) echo ' ' . $space; ?><?php if ( isset( $portfolio_layout ) ) echo ' ' . $portfolio_layout; ?><?php if ( $options_data['portfolio_wide'] ) echo ' ' . 'st-standart-full-width'; ?>">
    <?php if ( isset( $masonry ) ) : ?>
        <div class="st-masonry-gutter"></div>
        <div class="st-masonry-sizer"></div>
    <?php endif; ?>
    <?php
    if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'portfolio' );

        endwhile;

        the_posts_pagination(array(
            'prev_text'    => __('<span class="icon-arrows-left"></span>'),
            'next_text'    => __('<span class="icon-arrows-right"></span>'),
        ));

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>
</div>