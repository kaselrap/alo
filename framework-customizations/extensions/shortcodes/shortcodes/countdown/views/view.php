<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
if ( isset( $atts['countdown_date_time'] ) ) {
    $date = strtotime($atts['countdown_date_time']);
    $year = date('Y', $date);
    $month = date('m', $date);
    $day = date('d', $date);
    $hour = date('H', $date);
    $minute = date('i', $date);
}
if ( isset ( $atts['countdown_skin'] ) ) {
    $countdown_skin = ( $atts['countdown_skin'] == 'dark' ) ? 'st-countdown-dark-skin' : 'st-countdown-light-skin';
}
if ( isset ( $atts['countdown_font'] ) ) {
    if ( isset ( $atts['countdown_font']['size'] ) ) {
        $size = $atts['countdown_font']['size'];
        $label_size = ceil($size / 3.3);
    }
    if ( isset ( $atts['countdown_font']['color'] ) ) {
        $color = $atts['countdown_font']['color'];
    }
}
if ( isset ( $atts['countdown_font_line'] ) ) {
    $line = $atts['countdown_font_line'];
}
?>

<div class="st-countdown<?php if ( isset ( $countdown_skin ) ) echo ' ' . $countdown_skin;  ?>" data-year="<?php if ( isset ( $year )) echo $year;  ?>" data-month="<?php if ( isset ( $month )) echo $month;  ?>" data-day="<?php if ( isset ( $day )) echo $day;  ?>" data-hour="<?php if ( isset ( $hour )) echo $hour;  ?>" data-minute="<?php if ( isset ( $minute )) echo $minute;  ?>" data-amount-size="<?php echo (isset($size)) ? $size : '70' ?>" data-label-size="<?php echo (isset($label_size)) ? $label_size : '21' ?>" data-countdown-color="<?php echo (isset($color)) ? $color : '#222' ?>" data-line-color="<?php echo (isset($line)) ? $line : '#0078FF' ?>"></div>
