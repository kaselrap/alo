<?php
/**
 * Template part for displaying posts text
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */
?>
<?php global $options_data; ?>
<?php
    if ( isset ( $options_data['portfolio_single_layout'] ) ) {
        $name_layout = strrev(strtok(strrev($options_data['portfolio_single_layout']), '-'));
        if ( $name_layout == 'slider' ) {
            $slider = 'owl-carousel';
            $class = 'st-' . $options_data['portfolio_single_layout'];
        } else if ( $name_layout == 'gallery' ) {
            $type_gallery = 'st-' . $options_data['portfolio_single_layout'];
        } else if ( $name_layout == 'masonry' ) {
            $masonry = 'st-blog-holder st-masonry st-three-columns';
        }
    }
?>
<?php $gallery = fw_ext_portfolio_get_gallery_images(); ?>
<div class="st-gallery<?php if ( $options_data['portfolio_single_wide'] ) echo ' ' . 'st-standart-full-width'; ?><?php if ( isset ( $masonry ) ) echo ' ' . $masonry; ?><?php if ( isset ( $type_gallery ) ) echo ' ' . $type_gallery; ?><?php if ( isset ( $slider ) ) echo ' ' . $slider; ?><?php if ( isset ( $class ) ) echo ' ' . $class; ?>">
    <?php if ( isset( $masonry ) ) : ?>
        <div class="st-masonry-gutter"></div>
        <div class="st-masonry-sizer"></div>
    <?php endif; ?>
    <?php foreach( $gallery as $image ) : ?>
    <?php if ( isset ( $type_gallery ) ): ?>
        <div class="st-block-overlay hover-overlay st-gallery-image fw-col-md-4 fw-col-sm-6">
            <a href="<?php echo $image['url'] ?>" data-rel="prettyPhoto[portfolio-gallery-<?php echo get_the_ID(); ?>]">
                <div class="after" style="background: rgba(0,120,255,0.7);"></div>
                <img src="<?php echo $image['url'] ?>" alt=""/>
                <div class="before">
                    <span class="icon-arrows-plus"></span>
                </div>
            </a>
        </div>
    <?php elseif( isset( $masonry ) ): ?>
        <article>
            <a href="<?php echo $image['url'] ?>" data-rel="prettyPhoto[portfolio-gallery-<?php echo get_the_ID(); ?>]">
                <img src="<?php echo $image['url'] ?>" alt=""/>
            </a>
        </article>
    <?php else: ?>
            <a href="<?php echo $image['url'] ?>" data-rel="prettyPhoto[portfolio-gallery-<?php echo get_the_ID(); ?>]">
                <img src="<?php echo $image['url'] ?>" alt=""/>
            </a>
    <?php endif; ?>
<?php endforeach ?>
</div>
