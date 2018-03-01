<?php global $options_data; ?>
<header class="st-mobile-header">
	<div class="st-mobile-header-inner">
		<div class="st-mobile-header-holder">
			<div class="fw-container st-grid">
				<div class="st-vertical-aligns-containers">
					<div class="st-mobile-header-menu-opener">
						<a href="#" class="st-mobile-menu-icon">
							<span class="fw-icon st-mobile-menu-icon-opener">
								<i class="fa fa-bars"></i>
							</span>
						</a>
					</div>
					<div class="st-position-center">
						<div class="st-mobile-header-logo">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="st-position-right">
						<a href="#" class="st-mobile-search-icon">
							<span class="fw-icon">
								<i class="fa fa-search"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php
			wp_nav_menu(array(
		    'theme_location' => 'menu-1',
		    'container' => 'nav', 
		    'container_class' => 'st-mobile-menu',
		    'items_wrap'      => '<div class="fw-container st-grid"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
		    'link_before' => '<span>',     
			'link_after'  => '</span>',
			'walker' => new mobile_arrows_walker_nav_menu,
		    ));
		?>
	</div>
</header>