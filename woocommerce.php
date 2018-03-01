<?php
/**
 * The template for displaying shop pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

	get_header();

    get_template_part('template-parts/content-title');

?>
    <div class="st-shop-products st-full-width">
        <div class="fw-container">
            <div class="fw-row">
                <?php if(is_singular()): ?>
                    <div class="fw-col-md-12">
                        <?php woocommerce_content(); ?>
                    </div>
                <?php else: ?>
                    <div class="fw-col-md-9">
                        <?php woocommerce_content(); ?>
                    </div>
                    <div class="fw-col-md-3">
                        <?php
                        /**
                         * woocommerce_sidebar hook.
                         *
                         * @hooked woocommerce_get_sidebar - 10
                         */
                        do_action( 'woocommerce_sidebar' );
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php

get_footer();

?>