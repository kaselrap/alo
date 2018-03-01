<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ALO
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php global $options_data; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Passion+One:regular|Cormorant:regular|Open+Sans:regular" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php

    $fulpage_slider_showcase = is_page( 'split-slider-showcase') ? 'st-full-screen-slider-show-case' : '';
//    $header = ( $fulpage_slider_showcase == '' ) ? '' : 'header-fixed';
    $header = ( $fulpage_slider_showcase == '' ) ? '' : '';
    $header_transparent = ( $options_data['header_layout'] == 'version2' ) ? 'st-header-transparent' : '';
?>

<body <?php body_class(array( $fulpage_slider_showcase, $header, $header_transparent )); ?>>
<div class="st-wrapper">
	<div id="st-loader-wrapper">
	    <div id="st-loader">
	    	<span>A</span>
	    	<div class="st-loader-background-flip"></div>
	    </div>	 
	</div>
	<div class="st-fullscrean-search-holder">
		<div class="st-fullscrean-search-close">
			<a href="#" class="icon-arrows-remove st-search-icon-close"></a>
		</div>
		<div class="st-fullscrean-search-container">
			<?php
				get_search_form();
			?>
		</div>
	</div>
	<?php 
	$header_layout = isset($options_data['header_layout']) ? $options_data['header_layout'] : 'version1';
	$mobile_header_layout = isset($options_data['mobile_header_layout']) ? $options_data['mobile_header_layout'] : 'version1';
	get_template_part('template-parts/headers/header-'.$header_layout.'');
	get_template_part('template-parts/headers/mobile/header-'.$mobile_header_layout.'');
	?>


	<div id="content" class="site-content">
