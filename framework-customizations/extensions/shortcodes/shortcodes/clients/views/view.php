<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( isset ($atts) ) {
    if (  isset ( $atts['clients_option'] ) ) {
        $clients = $atts['clients_option'];
    }
    if ( isset ( $atts['clients_number_of_items'] ) ) {
        $clients_number_of_items = ( !empty($atts['clients_number_of_items']) ) ? (int)$atts['clients_number_of_items'] : 3;
    }
    if ( isset ( $atts['clients_autoplay'] ) ) {
        $clients_autoplay = ( !empty($atts['clients_autoplay']) ) ? $atts['clients_autoplay'] : 'yes';
    }
    if ( isset ( $atts['clients_autoplay_timeout'] ) ) {
        $clients_autoplay_timeout = ( !empty($atts['clients_autoplay_timeout']) ) ? (int)$atts['clients_autoplay_timeout'] : 5000;
    }
    if ( isset ( $atts['clients_animation_speed'] ) ) {
        $clients_animation_speed = ( !empty($atts['clients_animation_speed']) ) ? (int)$atts['clients_animation_speed'] : 600;
    }
    if ( isset ( $atts['clients_loop'] ) ) {
        $clients_loop = ( !empty($atts['clients_loop']) ) ? $atts['clients_loop'] : 'yes';
    }
    if ( isset ( $atts['clients_navigation'] ) ) {
        $clients_navigation = ( !empty($atts['clients_navigation']) ) ? $atts['clients_navigation'] : 'no';
    }
    if ( isset ( $atts['clients_pagination'] ) ) {
        $clients_pagination = ( !empty($atts['clients_pagination']) ) ? $atts['clients_pagination'] : 'no';
    }
}

?>
<div class="st-clients-carousel">
    <div class="st-cc-inner st-owl-slider"
        <?php if(isset($clients_number_of_items)) echo "data-number-of-items=$clients_number_of_items"; ?>
        <?php if(isset($clients_autoplay)) echo "data-enable-autoplay=$clients_autoplay"; ?>
        <?php if(isset($clients_autoplay_timeout)) echo "data-slider-speed=$clients_autoplay_timeout"; ?>
        <?php if(isset($clients_animation_speed)) echo "data-slider-speed-animation=$clients_animation_speed"; ?>
        <?php if(isset($clients_loop)) echo "data-loop=$clients_loop"; ?>
        <?php if(isset($clients_navigation)) echo "data-enable-navigation=$clients_navigation"; ?>
        <?php if(isset($clients_pagination)) echo "data-enable-pagination=$clients_pagination"; ?>
    >
        <?php if( isset ( $clients ) ): ?>
            <?php foreach ($clients as $client) : ?>
                <?php if ( $client['type-hover'] == 'zoom-in' ) { $hover_type = 'hover-type-zoomin'; } ?>
                <?php if ( $client['enable_link'] == 'no' ): ?>
                    <span <?php if ( isset ( $hover_type ) ): ?>class="st-cc-items st-imageframe <?php echo $hover_type; ?>"<?php endif; ?>>
                        <img class="st-cc-image" src="<?php echo $client['image']['url']; ?>" alt="<?php echo $client['title']; ?>">
                    </span>
                <?php else: ?>
                    <a href="<?php echo $client['link']; ?>" target="<?php echo esc_attr($atts['target']) ?>" >
                        <span <?php if ( isset ( $hover_type ) ): ?>class="st-imageframe <?php echo $hover_type; ?>"<?php endif; ?>>
                            <img class="st-cc-image" src="<?php echo $client['image']['url']; ?>" alt="<?php echo $client['title']; ?>">
                        </span>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>