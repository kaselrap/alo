<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
	</div><!-- #content -->
    <div class="st-back-to-top">
        <span class="icon-arrows-up"></span>
    </div>
	<footer id="colophon" class="site-footer">
		<div class="site-info st-light">
			<div class="fw-container-fluid">
				<div class="fw-row">
					<div class="fw-col-md-6 fw-col-sm-12 fw-text-left">
						<div class="st-footer-copyright-text">
							<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( '&copy; %s', 'alo' ), date('Y') );
								printf( esc_html__( 'Copyright photography theme %s', 'alo' ), 'Soul Themes' );
							?>
						</div>
					</div>
					<div class="fw-col-md-6 fw-col-sm-12 fw-text-right">
<!--						--><?php
//							wp_nav_menu(array(
//						    'theme_location' => 'social',
//						    'container' => false,
//						    'items_wrap'      => '<ul id="%1$s" class="%2$s st-footer-social-menu-links">%3$s</ul>',
//						    'link_before' => '<span>',
//							'link_after'  => '</span>',
//						    ));
//						?>
                        <ul class="st-footer-social-menu-links">
                            <?php
                            if ( isset ( $options_data['footer_showing_icon'] ) ) {
                                $icons = $options_data['footer_icons'];
                                foreach ( $icons as $icon ) {
                                    if ($options_data['footer_showing_icon'] == 'text') {
                                        $name_social_icon = strrev(strtok(strrev($icon['footer_social_icon']), '-'));
                                        echo '<li><a href="' . $icon['footer_social_icon_link'] . '"><span>' . $name_social_icon . '</span></a></li>';
                                    } else if ($options_data['footer_showing_icon'] == 'icon') {
                                        echo '<li><a href="' . $icon['footer_social_icon_link'] . '"><span class="' . $icon['footer_social_icon'] . '"></span></a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<!-- <div class="site-info st-dark">
			<div class="fw-container-fluid">
				<div class="fw-row">
					<div class="fw-col-sm-6 fw-col-xs-3">
						<div class="st-footer-copyright-text">
							<?php
								
							?>
						</div>
					</div>
					<div class="fw-col-sm-6 fw-col-xs-3">
						<?php
							wp_nav_menu(array(
						    'theme_location' => 'category',
						    'container' => false, 
						    'items_wrap'      => '<ul id="%1$s" class="%2$s st-footer-category-links">%3$s</ul>',
						    'link_before' => '<span>',     
							'link_after'  => '</span>',
						    ));
						?>
					</div>	
					<div class="fw-col-sm-6 fw-col-xs-3">
						<?php
							wp_nav_menu(array(
						    'theme_location' => 'social',
						    'container' => false, 
						    'items_wrap'      => '<ul id="%1$s" class="%2$s st-footer-category-links">%3$s</ul>',
						    'link_before' => '<span>',     
							'link_after'  => '</span>',
						    ));
						?>
					</div>	
					<div class="fw-col-sm-6 fw-col-xs-3">
						<?php
							wp_nav_menu(array(
						    'theme_location' => 'category',
						    'container' => false, 
						    'items_wrap'      => '<ul id="%1$s" class="%2$s st-footer-category-links">%3$s</ul>',
						    'link_before' => '<span>',     
							'link_after'  => '</span>',
						    ));
						?>
					</div>	
				</div>
			</div>
		</div> -->
	</footer><!-- #colophon
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
