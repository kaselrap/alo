<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>
<?php
if ( isset ( $atts['cta_button'] ) ) {
    $button = $atts['cta_button']['button'];
    $class = 'st-btn st-btn-' . $button['button_style_picker'];
    if ( $button['button_border_radius'] == 'no-border' ) {
        $class .= ' st-border-radius-none';
    }
    $style = $button['button_style_picker'];
    if ( $style == 'solid' && $button['button_color']['type_color'] == 'custom' ) {
        $custom = $button['button_color']['custom_color'];
        $bg_color = ($custom['color'] == '') ? 'var(--accent-color)' : $custom['color'];
        $bg_color_hover = ($custom['color_hover'] == '') ? 'var(--dark-color)' : $custom['color_hover'];
        $text_color = ($custom['text_color'] == '') ? '#fff' : $custom['text_color'];
        $text_color_hover = ($custom['text_color_hover'] == '') ? '#fff' : $custom['text_color_hover'];
    } else if ( $style == 'solid' && $button['button_color']['type_color'] == 'dark' ) {
        $custom = $button['button_color']['custom_color'];
        $bg_color = 'var(--dark-color)';
        $bg_color_hover = 'var(--accent-color)';
        $text_color = '#fff';
        $text_color_hover = '#fff';
    } else if ( $style != 'solid' && $button['button_color']['type_color'] == 'custom' ) {
        $custom = $button['button_color']['custom_color'];
        $border_color = ($custom['color'] == '') ? 'var(--accent-color)' : $custom['color'];
        $border_color_hover = ($custom['color_hover'] == '') ? 'var(--accent-color)' : $custom['color_hover'];
        $bg_color_hover = ($custom['color_hover'] == '') ? 'var(--accent-color)' : $custom['color_hover'];
        $text_color = ($custom['text_color'] == '') ? 'var(--accent-color)' : $custom['text_color'];
        $text_color_hover = ($custom['text_color_hover'] == '') ? '#fff' : $custom['text_color_hover'];
    }else if ( $style != 'solid' && $button['button_color']['type_color'] == 'dark' ) {
        $custom = $button['button_color']['custom_color'];
        $border_color = 'var(--dark-color)';
        $bg_color_hover = 'var(--dark-color)';
        $text_color = 'var(--dark-color)';
        $text_color_hover = '#fff';
    }
    if ( $button['button_border_radius'] == 'no-border' ) {
        $btn_border = 'border-radius: unset;';
    }
    if ( !empty($button['button_label']) ) {
        $btn_label = $button['button_label'];
    }
    if ( is_array($button['button_link']) ) {
        $link = $button['button_link']['link'];
        $target = $button['button_link']['target'];
    }
    if ( !empty($button['button_size']) ) {
        $btn_size = 'st-btn-' . $button['button_size'];
    }
    if ( $button['button_alignment'] == true ) {
        $btn_alignment = true;
        $class.= ' st-btn-huge';
    }
}
?>

<div class="st-call-to-action">
    <div class="st-cta-text-holder">
        <h3 class="st-sta-text" <?php if (isset ( $atts['color'] ) && !empty($atts['color'])): ?>style="color:<?php echo $atts['color']; ?>"<?php endif; ?>>
            <?php if (!empty($atts['message'])): ?>
                <?php echo $atts['message']; ?>
            <?php endif; ?>
        </h3>
    </div>
    <div class="st-cta-button-holder">
        <a href="<?php if ( isset ($link) ) echo $link; ?>" target="<?php if ( isset ($target) ) echo $target; ?>" class="st-price-box-button<?php if ( isset ($class) ) echo ' ' . $class; ?>" style="<?php if ( isset ( $bg_color ) ) echo 'background-color:'.$bg_color.';'; ?><?php if ( isset ( $border_color ) ) echo ' border-color:'.$border_color.';' ; ?><?php if ( isset ( $text_color ) ) echo 'color:'.$text_color.';'; ?>" <?php if ( isset ( $text_color_hover ) ) echo 'data-hover-color="' . $text_color_hover . '"'; ?><?php if ( isset ( $bg_color_hover ) ) echo 'data-hover-bg-color="' . $bg_color_hover . '"'; ?><?php if ( isset ( $border_color_hover ) ) echo 'data-hover-border-color="' . $border_color_hover . '"'; ?>><?php if ( isset ( $btn_label ) ) echo $btn_label; ?></a>
    </div>
</div>