<?php global $options_data; ?>
<header class="st-page-header ">
	<div class="st-main-area">
		<div class="st-vertical-aligns-containers">
			<div class="st-position-left">
				<div class="st-logo-wrapper">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="st-position-right">
				<div class="st-hamburger-menu">
					<a href="#" class="st-hamburger-menu-opener">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
	wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'container' => 'nav', 
    'container_class' => 'st-fulwidth-menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'link_before' => '<span>',     
	'link_after'  => '</span>',
	'walker' => new mobile_arrows_walker_nav_menu,
    ));
?>