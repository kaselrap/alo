<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$custom_class = ( isset( $atts['custom_class'] ) && '' . $atts['custom_class'] ) ? $atts['custom_class'] : '';
$custom_class_2 = ( isset( $atts['custom_class_2'] ) && '' . $atts['custom_class_2'] ) ? $atts['custom_class_2'] : '';
if ( isset ( $atts['column_space'] ) ) {
    $atts['column_space'] = 'st-column-' . $atts['column_space'];
}
if ( isset ( $atts['column_border'] ) ) {
    if ( $atts['column_border'] == 'all-border' ) {
        $border = 'st-border';
    } else {
        $border = 'st-' . $atts['column_border'];
    }
}
?>
<div class="<?php echo esc_attr($class); ?> <?php echo esc_attr($custom_class); ?><?php if ( isset ($border) ) echo ' '.$border; ?>">
	<?php
	if ( $custom_class_2 != '' ) {
		?>
	<div class="<?php echo esc_attr($custom_class_2); ?>">
		<?php echo do_shortcode($content); ?>
	</div>
		<?php
	}
	else {
		?>
	<?php echo do_shortcode($content); ?>
		<?php
	}
	?>
</div>
