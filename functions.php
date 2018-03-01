<?php
/**
 * ALO functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ALO
 */

if ( ! function_exists( 'alo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ALO, use a find and replace
		 * to change 'alo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'alo' ),
			'social' => esc_html__( 'Social', 'alo' ),
			'category' => esc_html__( 'Category', 'alo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'alo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'alo_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alo_content_width', 640 );
}
add_action( 'after_setup_theme', 'alo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alo_styles() {
	wp_enqueue_style( 'alo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'alo-color-style', get_template_directory_uri() . '/assets/css/color.css' );

	wp_enqueue_style( 'alo-linea-arrows', get_template_directory_uri() . '/assets/css/linea-arrows/styles.css' );

    wp_enqueue_style( 'alo-linea-ecommerce', get_template_directory_uri() . '/assets/css/linea-ecommerce/styles.css' );

    wp_enqueue_style( 'alo-preloader', get_template_directory_uri() . '/assets/css/preloader.css' );

    wp_enqueue_style( 'alo-font-awesome-icons', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'alo-social-icons', get_template_directory_uri() . '/assets/css/socicon/style.css' );

    wp_enqueue_style( 'alo-owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel/css/owl.carousel.min.css' );

    wp_enqueue_style( 'alo-animate-css', get_template_directory_uri() . '/assets/js/animate/animate.css' );

    wp_enqueue_style( 'alo-theme-style', get_template_directory_uri() . '/assets/css/theme.css' );

    wp_enqueue_style( 'alo-theme-two-style', get_template_directory_uri() . '/assets/css/theme-two.css' );

    wp_enqueue_style( 'alo-media-style', get_template_directory_uri() . '/assets/css/media.css' );

    wp_enqueue_style( 'alo-hover-style', get_template_directory_uri() . '/assets/css/hover.css' );

    wp_enqueue_style( 'alo-filter-style', get_template_directory_uri() . '/assets/css/filter.css' );

    wp_enqueue_style( 'alo-buttons-style', get_template_directory_uri() . '/assets/css/buttons.css' );
}
add_action( 'wp_enqueue_scripts', 'alo_styles' );

function alo_scripts() {

    wp_enqueue_script( 'alo-navigation', get_template_directory_uri() . '/assets/js/navigation.js', 'jquery', '20151215', true );

    wp_enqueue_script( 'alo-wait-for-images', get_template_directory_uri() . '/assets/js/jquery.waitforimages.min.js', 'jquery', '20151215', true );

	wp_enqueue_script( 'alo-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', 'jquery', '20151215', true );

	wp_enqueue_script( 'alo-preloader-js', get_template_directory_uri() . '/assets/js/preloader.js', 'jquery', '1.0', true );

	wp_enqueue_script( 'alo-full-page-js', get_template_directory_uri() . '/assets/js/jquery.fullPage.min.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-owlcarousel-js', get_template_directory_uri() . '/assets/js/owlcarousel/owl.carousel.min.js', 'jquery', '2.2.1', true );

    wp_enqueue_script( 'alo-cart-js', get_template_directory_uri() . '/assets/js/cart.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-prettyPhoto-js', get_template_directory_uri() . '/assets/js/prettyPhoto/jquery.prettyPhoto.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-slick-js', get_template_directory_uri() . '/assets/js/slick/slick.min.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', 'jquery', '4.2', true );

    wp_enqueue_script( 'alo-jquey-appear-js', get_template_directory_uri() . '/assets/js/jquery.appear.js', 'jquery', '4.2', true );

    wp_enqueue_script( 'alo-count-to-js', get_template_directory_uri() . '/assets/js/countTo.js', 'jquery', '4.2', true );

    wp_enqueue_script( 'alo-jquery-plugin-js', get_template_directory_uri() . '/assets/js/jquery.plugin.js', 'jquery', '2.1', true );

    wp_enqueue_script( 'alo-countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', 'jquery', '2.1', true );

    wp_enqueue_script( 'alo-paralax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', 'jquery', '1.5.0', true );

    wp_enqueue_script( 'alo-filter-js', get_template_directory_uri() . '/assets/js/filter.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-progress-bar-js', get_template_directory_uri() . '/assets/js/progress-bar.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-animate-css', get_template_directory_uri() . '/assets/js/animate/animate-css.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-custom-script-js', get_template_directory_uri() . '/assets/js/custom-script.js', 'jquery', '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alo_scripts' );

function alo_admin_styles() {
    wp_enqueue_style( 'alo-social-icons', get_template_directory_uri() . '/assets/css/socicon/style.css' );

    wp_enqueue_style( 'alo-color-style', get_template_directory_uri() . '/assets/css/color.css' );

    wp_enqueue_style( 'alo-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'alo_admin_styles' );

function alo_admin_scripts() {
    wp_enqueue_script( 'alo-custom-script-js', get_template_directory_uri() . '/assets/js/change-post-options.js', 'jquery', '1.0', true );

    wp_enqueue_script( 'alo-admin-script-js', get_template_directory_uri() . '/assets/js/admin-script.js', 'jquery', '1.0', true );

}
add_action( 'admin_enqueue_scripts', 'alo_admin_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Hooks additions.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load TGM Plugins.
 */
require get_template_directory() . '/tgm/alo.php';

function _action_theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active
    global $options_data;
    $options_data = fw_get_db_customizer_option();
}

add_action('wp_print_styles', '_action_theme_wp_print_styles');

add_filter('show_admin_bar', '__return_false');

class mobile_arrows_walker_nav_menu extends Walker_Nav_Menu {
		// add classes to ul sub-menus
	 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . ( $args->walker->has_children ? ' st-menu-child-link' : '' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s%6$s</a>%7$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			( $args->walker->has_children ) ? '<span class="st-mobile-arrow-icon"><i class="fa fa-angle-right"></i></span>' : '',
			$args->after
		);
		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
class header_sub_menu_walker_nav_menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent" . '<div class="st-parent-menu">' . "<ul class=\"sub-menu dropdown-wrapper\">\n"; 
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul>" . '</div>' . "\n";
    }
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . ($depth == 0 && $args->walker->has_children ? ' st-has-sub' : '' ) . ( $depth > 0 && $args->walker->has_children ? ' st-sub' : '' ) . '">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s%6$s</a>%7$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			($depth > 0 && $args->walker->has_children) ? '<span class="st-mobile-arrow-icon"><i class="fa fa-angle-left"></i></span>' : '',
			$args->after
		);
		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'quote', 'video' ) );

function alo_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <div <?php comment_class('st-comment'); ?> id="st-comment-<?php comment_ID(); ?>">
        <div class="st-avatar">
            <?php echo get_avatar($comment,$size = '90'); ?>
        </div>
        <div class="st-comment-info">
            <h3 class="st-name">
                <span class="st-comment-author">
                    <?php comment_author(); ?>
                </span>
                <span class="st-comment-date">
                    <?php comment_date(); ?>
                </span>
            </h3>
            <div class="st-comment-text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
    </div>
    <?php
}
function hexToRgb($hex, $alpha = false) {
    $hex      = str_replace('#', '', $hex);
    $length   = strlen($hex);
    $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
    $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
    $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
    if ( $alpha ) {
        $rgb['a'] = $alpha;
    }
    return implode(array_keys($rgb)) . '(' . implode(', ', $rgb) . ')';
}
function isColorDark ($color) {
    $color = str_replace('#', '', $color);

    $r = hexdec(substr($color,0,2));
    $g = hexdec(substr($color,2,2));
    $b = hexdec(substr($color,4,2));
    $yiq = (($r*299)+($g*587)+($b*114))/1000;

    return $yiq >= 128;
}
function negativeNumeric ($num) {
    return ( $num < 0 ) ? $num : -1 * $num;
}

function alo_load_more_script() {

    global $wp_query;

    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script( 'loadmore', get_template_directory_uri()  . '/assets/js/loadmore.js', array('jquery') );

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'loadmore', 'alo_load_more_script', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'alo_load_more_script' );

function alo_loadmore_ajax_handler(){

    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );

    if( have_posts() ) :

        // run the loop
        while( have_posts() ): the_post();

            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part( 'template-parts/content', 'blog-standart' );
            // for the test purposes comment the line above and uncomment the below one
            // the_title();


        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'alo_loadmore_ajax_handler'); // wp_ajax_{action}