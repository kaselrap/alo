<?php global $options_data; ?>
<header class="st-page-header">
	<div class="st-main-area">
		<div class="st-vertical-aligns-containers">
			<div class="st-position-left">
				<div class="st-logo-wrapper">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="st-position-right">
				<?php
					wp_nav_menu(array(
				    'theme_location' => 'menu-1',
				    'container' => 'nav', 
				    'container_class' => 'st-drop-down-menu',
				    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				    'link_before' => '<span>',     
					'link_after'  => '</span>',
					'walker' => new header_sub_menu_walker_nav_menu,
				    ));
				?>
                <div class="st-shop-cart">
                    <div class="st-shop-cart-inner">
                        <a href="/cart/" class="st-shop-cart-icon">
                            <span class="icon-ecommerce-bag"></span>
                        </a>
                        <div class="st-shop-cart-dropdown">
                            <?php woocommerce_mini_cart(); ?>
                        </div>
                    </div>
                </div>
				<a href="#" class="st-search-icon">
					<span class="fw-icon">
						<i class="fa fa-search"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
    <div class="st-sticky-header-menu">
        <div class="st-vertical-aligns-containers">
            <div class="st-position-left">
                <div class="st-logo-wrapper">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="st-position-right">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'container' => 'nav',
                    'container_class' => 'st-drop-down-menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'walker' => new header_sub_menu_walker_nav_menu,
                ));
                ?>
            </div>
        </div>
    </div>
</header>