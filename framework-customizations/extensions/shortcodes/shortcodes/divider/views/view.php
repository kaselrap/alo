<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( 'line-hr' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-line"><hr/></div>
<?php endif; ?>

<?php if ( 'line' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-personal-line" style="width: <?php echo (int) $atts['style']['line']['width']; ?>px; height: <?php echo (int) $atts['style']['line']['height']; ?>px; background: <?php echo $atts['style']['line']['color']; ?>; margin: 15px 0;"></div>
<?php endif; ?>

<?php if ( 'space' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-space" style="padding-top: <?php echo (int) $atts['style']['space']['height']; ?>px;"></div>
<?php endif; ?>