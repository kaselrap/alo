<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<?php if (!empty($atts['blockquote'])): ?>
    <blockquote>
        <p>
            "<?php echo $atts['blockquote']; ?>"
        </p>
    </blockquote>
<?php endif; ?>
