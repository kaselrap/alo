<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
if ( isset ( $atts ) ) {
    if ( isset ( $atts['team_member_image'] ) ) {
        $image = $atts['team_member_image']['url'];
        $alt = get_post_meta($atts['team_member_image']['attachment_id'], '_wp_attachment_image_alt', true);
        if ( isset ( $atts['team_member_aspect_ratio'] ) ) {
            $ratio_picker = $atts['team_member_aspect_ratio']['ratio-picker'];
            $type_ratio = ( empty ( $ratio_picker['ratio'] ) ) ? '4x3' : $ratio_picker['ratio'];
            $ratio_height = $ratio_picker[$type_ratio]['ratio-height'];
            $ratio_width = $ratio_picker[$type_ratio]['ratio-width'];
        }
    }
    if ( isset ( $atts['team_member_name'] ) ) {
        $name = $atts['team_member_name'];
    }
    if ( isset ( $atts['team_member_job'] ) ) {
        $job = $atts['team_member_job'];
    }
    if ( isset ( $atts['team_member_description'] ) ) {
        $content = $atts['team_member_description'];
    }
    if ( isset( $atts['team_member_social'] ) ) {
        $icons = $atts['team_member_social']['popup']['icon'];
        if ( isset ( $atts['team_member_social']['popup']['boxed'] ) && $atts['team_member_social']['popup']['boxed'] == 'yes' ) {
            $boxed = 'st-boxed';
            if ( isset ( $atts['team_member_social']['popup']['border-radius'] ) ) {
                $border_radius = abs($atts['team_member_social']['popup']['border-radius']);
            }
            if ( isset ( $atts['team_member_social']['popup']['color'] ) ) {
                $color_type = $atts['team_member_social']['popup']['color']['icon_color_type'];
                if ( $color_type == 'individual' ) {
                    $background_color = $atts['team_member_social']['popup']['color'][$color_type]['boxed-color'];
                    $color = (isColorDark($background_color)) ? $atts['team_member_social']['popup']['color'][$color_type]['color'] : '#fff';
                    $border_color = $atts['team_member_social']['popup']['color'][$color_type]['border-color'];
                }
            }
            if ( isset ( $atts['team_member_social']['popup']['tooltip'] ) && $atts['team_member_social']['popup']['tooltip']['active'] == 'true' ) {
                $tooltip_alignment = $atts['team_member_social']['popup']['tooltip']['alignment'];
            }
        }
    }
    if ( isset ( $atts['team_member_social_position'] ) ) {
        $position = $atts['team_member_social_position'];
    }
    if ( isset ( $atts['team_member_background'] ) && $atts['team_member_background']['active'] == 'true' ) {
        $background_box = $atts['team_member_background']['color'];
    }
    if ( isset ( $atts['team_member_color'] ) && $atts['team_member_color']['active'] == 'true' ) {
        $color_box = $atts['team_member_color']['color'];
    }
    if ( isset ( $atts['team_member_spacing'] ) && $atts['team_member_spacing']['active'] == 'true' ) {
        $padding = $atts['team_member_spacing']['space'];
    }
    if ( isset ( $atts['team_member_hover_image'] ) && $atts['team_member_hover_image'] != 'none' ) {
        $hover_type = 'hover-type-' . $atts['team_member_hover_image'] ;
    }
    if ( isset ( $atts['team_member_border_image'] ) && !empty($atts['team_member_border_image']['pixels']) ) {
        $border_pixels = $atts['team_member_border_image']['pixels'];
        $border_color = ( empty($atts['team_member_border_image']['color']) ) ? '#f9f9f9' : $atts['team_member_border_image']['color'] ;
    }
}
?>
<div class="st-team-member">
    <div class="st-tm-image">
        <div class="st-tm-image-wrapper">
            <span <?php if ( isset ( $hover_type ) ): ?>class="st-imageframe <?php echo $hover_type; ?>"<?php endif; ?><?php if ( isset ( $border_pixels ) && isset ( $border_color ) ): ?>style="border:<?php echo $border_pixels ?>px solid <?php echo $border_color; ?>;"<?php endif; ?>>
                <img src="<?php if ( isset ( $image ) ) echo $image; ?>" alt="<?php if ( isset ( $alt ) ) echo $alt; ?>"<?php if ( isset ( $ratio_height ) && isset ( $ratio_width ) ): ?>data-resize="image" data-ratio-height="<?php echo $ratio_height; ?>" data-ratio-width="<?php echo $ratio_width; ?>" style="object-fit:cover;"<?php endif; ?>>
            </span>
        </div>
    </div>
    <div class="st-tm-desc" style="<?php if ( isset ( $background_box ) ) echo 'background-color: ' . $background_box . '; margin-top: 0;'; ?><?php if ( isset ( $color_box ) ) echo 'color: ' . $color_box . ';'; ?><?php if ( isset ( $padding ) ) echo 'padding: ' . $padding . 'px;'; ?>">
        <div class="st-tm-author">
            <div class="st-tm-author-wrapper">
                <h3 class="st-tm-name"><?php if ( isset ( $name ) ) echo $name; ?></h3>
                <div class="st-tm-position">
                    <?php if ( isset ( $job ) ) echo $job; ?>
                </div>
            </div>
            <?php  if ( isset( $position ) && $position == 'first' ) : ?>
                <div class="st-tm-social-networks st-social-networks<?php if ( isset ( $boxed ) ) echo ' ' . $boxed; ?>">
                    <?php if ( isset ( $icons ) ): ?>
                        <?php foreach($icons as $icon): ?>
                            <a href="<?php echo $icon['link']; ?>" style="<?php if ( isset ( $border_color ) ) echo "border-color:" . $border_color . ";"; ?><?php if ( isset ( $background_color ) ) echo "background-color:" . $background_color . ";"; ?><?php if ( isset ( $color ) ) echo "color:" . $color . ";"; ?><?php if ( isset ( $border_radius ) ) echo "border-radius:" . $border_radius . "px;"; ?>" class="st-social-network-icon <?php echo $icon['icon']; ?>"<?php if( isset($tooltip_alignment) ): ?> data-toggle="tooltip" data-placement="<?php echo $tooltip_alignment; ?>" title="<?php echo $icon['name']; ?>"<?php endif; ?>></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="st-tm-content">
            <?php if ( isset ( $content ) ) echo $content; ?>
        </div>
        <?php  if ( isset( $position ) && $position == 'second' ) : ?>
            <div class="st-tm-social-networks st-social-networks-bottom st-social-networks<?php if ( isset ( $boxed ) ) echo ' ' . $boxed; ?>">
                <?php if ( isset ( $icons ) ): ?>
                    <?php foreach($icons as $icon): ?>
                        <a href="<?php echo $icon['link']; ?>" style="<?php if ( isset ( $border_color ) ) echo "border-color:" . $border_color . ";"; ?><?php if ( isset ( $background_color ) ) echo "background-color:" . $background_color . ";"; ?><?php if ( isset ( $color ) ) echo "color:" . $color . ";"; ?><?php if ( isset ( $border_radius ) ) echo "border-radius:" . $border_radius . "px;"; ?>" class="st-social-network-icon <?php echo $icon['icon']; ?>"<?php if( isset($tooltip_alignment) ): ?> data-toggle="tooltip" data-placement="<?php echo $tooltip_alignment; ?>" title="<?php echo $icon['name']; ?>"<?php endif; ?>></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>