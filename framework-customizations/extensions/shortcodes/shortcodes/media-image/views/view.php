<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	return;
}

$image = $atts['image']['url'];

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$hover_type = $atts['hover_type'];

$hover_color = $atts['hover_color'];

$img_attributes = array(
	'src' => $image,
	'alt' => $alt ? $alt : $image
);
$link_attributes = array (
    'href' => $image,
    'target' => $atts['target'],
    'data-rel' => 'prettyPhoto[single-pretty-photo]'
);
$hover_attributes = array(
    'class' => 'hover ' . $hover_type,
    'style' => 'background:' . hexToRgb($hover_color, .7)
);
if ( (int)$atts['hover_target'] == 1 ) {
    if ( empty( $atts['link'] ) ) {
        echo fw_html_tag('div', $hover_attributes,
            fw_html_tag('a',$link_attributes ,
                fw_html_tag('img',$img_attributes)));
    } else {
        echo fw_html_tag('div', $hover_attributes,
            fw_html_tag('a', array(
                'href' => $atts['link'],
                'target' => $atts['target'],
            ), fw_html_tag('img',$img_attributes)));
    }
} else if ( (int)$atts['hover_target'] == 0 ) {
    if ( empty( $atts['link'] ) ) {
        echo fw_html_tag('img',$img_attributes);
    } else {
        echo
            fw_html_tag('a', array(
                'href' => $atts['link'],
                'target' => $atts['target'],
            ), fw_html_tag('img',$img_attributes));
    }
}
