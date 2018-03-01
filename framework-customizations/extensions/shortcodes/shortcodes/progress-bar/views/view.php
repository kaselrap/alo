<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
if (!empty($atts['progress_bar_percantage'])) {
    if ( $atts['progress_bar_percantage'] > 100 ) {
        $atts['progress_bar_percantage'] = 100;
    } else if ( $atts['progress_bar_percantage'] < 0 ) {
        $atts['progress_bar_percantage'] = 0;
    } else if ( preg_match("/[a-z]/i", $atts['progress_bar_percantage']  )) {
        $atts['progress_bar_percantage'] = 0;
    }
}
?>
<div class="st-progress-bar">
    <h5 class="st-pb-title-holder">
        <div class="st-pb-title">
            <?php if (!empty($atts['progress_bar_title'])) echo $atts['progress_bar_title']; ?>
        </div>
        <div class="st-pb-percent">
            0
        </div>
    </h5>
    <div class="st-pb-content-holder">
        <div class="st-pb-content" style="background-color: <?php if (!empty($atts['progress_bar_color'])) echo $atts['progress_bar_color']; ?>;" data-percentage="<?php if (!empty($atts['progress_bar_percantage'])) echo $atts['progress_bar_percantage']; ?>"></div>
    </div>
</div>
