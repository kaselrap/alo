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
<article id="post-<?php the_ID(); ?>" <?php ( $text_hover ) ? post_class() : post_class($options_data['portfolio_text_hover_type']); ?>>
    <?php
    if ( $hover_text == 'st-showing-on-top' ) {
        if ( isset( $options_data['portfolio_hover_color'] ) ) {
            $rgba_color = hexToRgb($options_data['portfolio_hover_color'], .7);
        }
    }
    if ( $text_hover || $hover_text == 'st-showing-on-bottom' || $hover_text == 'st-showing-on-center' ) {
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
    ?>
    <div class="st-stg-img st-block-overlay<?php if ( isset ( $hover_type ) ) echo ' ' . $hover_type; ?><?php if ( isset ( $transform_type ) ) echo ' ' . $transform_type; ?>">
        <div class="after" <?php if ( isset ( $rgba_color ) ) echo 'style="background:' . $rgba_color . '"'; ?>></div>
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>">
        <?php if ( $text_hover ): ?>
            <div class="before"></div>
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
            <ul>
                <?php
                $categories = get_the_terms( get_the_ID(), 'fw-portfolio-category' );
                foreach ($categories as $cat) : ?>
                    <li><a href="<?php echo get_category_link($cat) ?>"><span><?php echo $cat->name ?></span></a></li>
                    <?php echo ($categories[count($categories) - 1] == $cat) ? '' : '<span class="separator">&#47;</span>'; ?>
                <?php endforeach ?>
            </ul>
        <?php endif; ?>
    </div>
    <a class="st-link" href="<?php echo get_post_permalink(); ?>"></a>
</article><!-- #post-<?php the_ID(); ?> -->
