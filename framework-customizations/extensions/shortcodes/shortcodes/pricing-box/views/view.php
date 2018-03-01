<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
if (isset($atts['price_box_title'])) {
    $title = $atts['price_box_title'];
}
if ( isset ( $atts['price_box_background'] ) && !empty( $atts['price_box_background'] ) ) {
    $background_color = $atts['price_box_background'];
}
if (isset($atts['price_box_price'])) {
    if ( !empty ( $atts['price_box_price']['price_box_type'] ) ) {
        $type = $atts['price_box_price']['price_box_type'];
    }
    if ( isset ( $type ) ) {
        if ( $atts['price_box_price'][$type] == 'without-time' ) {
            $price = $atts['price_box_price'][$type]['price_amount'];
        } else {
            $price = $atts['price_box_price'][$type]['price_amount'];
            $time = $atts['price_box_price'][$type]['price_time'];
        }
    }
}
if (isset($atts['price_box_icon'])) {
    $icon = ($atts['price_box_icon'] == 'none') ? 'fa fa-usd' : $atts['price_box_icon'];
}
if ( isset ( $background_color ) ) {
    $color = (isColorDark($background_color)) ? 'var(--dark-color)' : 'white';
    $line_color = (isColorDark($background_color)) ? 'var(--gray-color)' : '#fff';
    $line_price_color = (isColorDark($background_color)) ? 'var(--accent-color)' : '#fff';
    $border = (isColorDark($background_color)) ? 'st-border' : '';
}
if ( isset ( $atts['price_box_button'] ) ) {
    $button = $atts['price_box_button']['button'];
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
<div class="st-price-box">
    <div class="st-price-box-inner<?php if ( isset ($border) ) echo ' ' . $border; ?>" style="<?php if ( isset ( $background_color ) ) echo 'background-color: ' . $background_color . ';'; ?><?php if ( isset ( $color ) ) echo 'color: ' . $color . ';'; ?>">
        <div class="st-price-box-title">
            <?php if ( isset ( $title ) ) echo $title; ?>
            <div class="after" style="<?php if ( isset ( $line_color ) ) echo 'background: ' . $line_color . ';'; ?>"></div>
        </div>
        <div class="st-price-box-price">
            <div class="st-price">
                <i class="<?php if ( isset ( $icon ) ) echo $icon; ?>"></i>
                <span><?php if ( isset ( $price ) ) echo $price; ?></span>
            </div>
            <div class="st-time">
                <?php if ( isset ( $time ) ) echo '/' . $time; ?>
            </div>
            <div class="after" style="<?php if ( isset ( $line_price_color ) ) echo 'background: ' . $line_price_color . ';'; ?>"></div>
        </div>
        <div class="st-price-box-options">
            <ul>
                <?php if ( isset($atts['price_box_option']) ) : ?>
                    <?php foreach ($atts['price_box_option'] as $option) : ?>
                        <li class="<?php if ( $option['disabled_option'] == true ) echo 'disabled'; ?>"><?php echo $option['name_option']; ?></li>
                    <?php endforeach; ?>

                <?php endif; ?>
            </ul>
        </div>
        <a href="<?php if ( isset ($link) ) echo $link; ?>" target="<?php if ( isset ($target) ) echo $target; ?>" class="st-price-box-button<?php if ( isset ($class) ) echo ' ' . $class; ?>" style="<?php if ( isset ( $bg_color ) ) echo 'background-color:'.$bg_color.';'; ?><?php if ( isset ( $border_color ) ) echo ' border-color:'.$border_color.';' ; ?><?php if ( isset ( $text_color ) ) echo 'color:'.$text_color.';'; ?>" <?php if ( isset ( $text_color_hover ) ) echo 'data-hover-color="' . $text_color_hover . '"'; ?><?php if ( isset ( $bg_color_hover ) ) echo 'data-hover-bg-color="' . $bg_color_hover . '"'; ?><?php if ( isset ( $border_color_hover ) ) echo 'data-hover-border-color="' . $border_color_hover . '"'; ?>><?php if ( isset ( $btn_label ) ) echo $btn_label; ?></a>
    </div>
</div>
