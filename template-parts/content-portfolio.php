<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<?php $text_hover = ( $options_data['portfolio_text_hover_type'] == 'st-no-hover' ) ? 1 : 0; ?>
<?php $hover_text = $options_data['portfolio_text_hover_type']; ?>
<?php

$categories = get_the_terms(get_the_ID(), 'fw-portfolio-category' );
$post_category = '[';
foreach ($categories as $cat) {
    if ( $cat === end( $categories ) ) {
        $post_category .= $cat->slug;
    } else {
        $post_category .= $cat->slug . ',';
    }
}
$post_category .= ']';

?>

<article id="post-<?php the_ID(); ?>" <?php ( $text_hover ) ? post_class() : post_class($options_data['portfolio_text_hover_type']); ?> data-group="<?php echo $post_category; ?>">
    <?php
    if ( $hover_text == 'st-showing-on-top' ) {
        if ( isset( $options_data['portfolio_hover_color'] ) ) {
            $rgba_color = hexToRgb($options_data['portfolio_hover_color'], .7);
        }
    }
    if ( $text_hover || $hover_text == 'st-showing-on-bottom' || $hover_text == 'st-showing-on-center' || $hover_text == 'st-showing-on-top' ) {
        if ( isset( $options_data['portfolio_hover_color'] ) ) {
            $rgba_color = hexToRgb($options_data['portfolio_hover_color'], .7);
        }
        if ( isset( $options_data['portfolio_hover_type'] ) ) {
            $hover_type = $options_data['portfolio_hover_type'];
        }
        if ( isset( $options_data['portfolio_transform_type'] ) ) {
            $transform_type = $options_data['portfolio_transform_type'];
        }
    }
    if ( isset($options_data['portfolio_layout']) ) {
        $name_layout = strtok($options_data['portfolio_layout'], '-');
        if ( $name_layout == 'classic' ) {
            $classic = 'st-stg-img';
        }
        if ( $name_layout == 'gallery' ) {
            $classic = 'st-stg-img';
            $gallery = 'st-gallery';
        }
    }
    ?>
    <div class="st-block-overlay<?php if ( isset( $classic ) ) echo ' ' . $classic; ?><?php if ( isset ( $hover_type ) ) echo ' ' . $hover_type; ?><?php if ( isset ( $transform_type ) ) echo ' ' . $transform_type; ?>">
        <div class="after" <?php if ( isset ( $rgba_color ) ) echo 'style="background:' . $rgba_color . '"'; ?>></div>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>">
        <?php if ( $text_hover ): ?>
            <div class="before">
                <span class="icon-arrows-plus"></span>
            </div>
        <?php endif; ?>
    </div>
    <div class="st-stg-text">
        <?php if ( $options_data['portfolio_title'] ) : ?>
            <h4>
                <a href="<?php echo get_the_permalink(); ?>">
                    <?php echo get_the_title(); ?>
                </a>
            </h4>
        <?php endif; ?>
        <?php if ( $options_data['portfolio_categories'] ) : ?>
            <?php if ( isset($gallery) ) {
                $images = fw_ext_portfolio_get_gallery_images(get_the_ID());
                $pics = count($images);
                echo '<ul>';
                echo '<li><span class="' . $gallery . '">' . $pics . ' pics</span></li>';
                echo '</ul>';
            } else {
                get_template_part('template-parts/content-portfolio-single-category');
            } ?>
        <?php endif; ?>
    </div>
    <?php if ( isset($gallery) ) : ?>
        <a class="st-link general" data-rel="prettyPhoto[gallery-item-<?php echo get_the_ID(); ?>]" href="<?php echo the_post_thumbnail_url(); ?>"></a>
        <?php
        foreach ($images as $image) {
            echo '<a class="st-link" data-rel="prettyPhoto[gallery-item-' . get_the_ID() . ']" href="' . $image["url"] . '"></a>';
        }
        ?>
    <?php  else: ?>
        <a class="st-link" href="<?php echo get_post_permalink(); ?>"></a>
    <?php endif ?>
</article><!-- #post-<?php the_ID(); ?> -->
