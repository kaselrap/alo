(function($) {
    //Chrome Smooth Scroll
    try {
        $.browserSelector();
        if($("html").hasClass("chrome")) {
            $.smoothScroll();
        }
    } catch(err) {

    };

    $("img, a").on("dragstart", function(event) { event.preventDefault(); });

})(jQuery);
(function($) {
    $.fn.extend({
        animateCss: function (animationName, callback) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
                if (callback) {
                    callback();
                }
            });
            return this;
        }
    });
	function mobileMenuSlideToggle() {
		var flag = 0;
		$(document).on('click', '.st-mobile-menu-icon', function(e) {
			e.preventDefault();
			flag =  $(this).hasClass('st-mobile-menu-opened') ? 1 : 0 ;
			( flag == 0 ) ? $('.st-mobile-menu').slideDown('fast') : $('.st-mobile-menu').slideUp('fast');
			( ! $('.st-mobile-menu-icon').hasClass('st-mobile-menu-opened') ) ? 
				($('.st-mobile-menu-icon').addClass('st-mobile-menu-opened') ) : 
				($('.st-mobile-menu-icon').removeClass('st-mobile-menu-opened') );
			flag = 1 - flag;
		});
		$(document).on('click', '.st-menu-child-link', function(e) {
			e.preventDefault();
			flag =  $(this).hasClass('st-menu-child-link-opened') ? 1 : 0 ;
			( flag == 0 ) ? $(this).siblings().slideDown('fast') : $(this).siblings().slideUp('fast');
			( ! $(this).hasClass('st-menu-child-link-opened') ) ? 
				($(this).addClass('st-menu-child-link-opened') ) : 
				($(this).removeClass('st-menu-child-link-opened') );
			flag = 1 - flag;
		});
	}
	function searchBoxFadeToggle() {
		$(document).on('click', '.st-mobile-search-icon, .st-search-icon', function(e) {
			e.preventDefault();
			$('.st-fullscrean-search-holder').fadeIn(400);
			$('.st-search-line').animate({width : "100%"},1000, function() {
				$('.st-fullscrean-search-container .st-search-submit').fadeIn(400);
			});

		});
		$(document).on('click', '.st-search-icon-close', function(e) {
			e.preventDefault();
			$('.st-fullscrean-search-holder').fadeOut(200);
			$('.st-search-line').css({'width' : 0});
			$('.st-fullscrean-search-container .st-search-submit').css({'display' : 'none'});
		});
	}
	/*
	 *Set dropdown menu position
	 */
	function stDropDownMenuSetPosition() {
		var menuItems = $('.st-drop-down-menu > ul > li');
		if ( menuItems.length ) {
			menuItems.each(function(i) {
				var browserWidth = $(document).width(),
					menuItemPosition = $(this).offset().left,
					widthDropDownMenu = $(this).find('.sub-menu').width(),
					menuItemFromLeft = 0;

				menuItemFromLeft = browserWidth - menuItemPosition;
				var subMenuDropDownMenuFromLeft;
				if( $(this).find('.st-sub').length > 0 ) {
					subMenuDropDownMenuFromLeft = menuItemFromLeft - widthDropDownMenu;
				}
				if( menuItemFromLeft < widthDropDownMenu || subMenuDropDownMenuFromLeft  < widthDropDownMenu ) {
					$(this).find('.sub-menu').addClass('st-right');
				}
			});
		}
	}
	function fulwidthMenu() {
		$(document).on('click', '.st-hamburger-menu', function(e) {
			e.preventDefault();
			flag =  $(this).hasClass('active') ? 1 : 0 ;
			( flag == 0 ) ? $('.st-fulwidth-menu').fadeIn(400) && $('.st-fulwidth-menu').css({'display' : 'flex'}) : $('.st-fulwidth-menu').fadeOut(400);
			( ! $(this).hasClass('active') ) ? 
				($(this).addClass('active') ) : 
				($(this).removeClass('active') );
			flag = 1 - flag;
		});

	}
	function fullScreenSectionScroll() {
		if ( $('body').hasClass('st-full-screen-slider-show-case') ) {
            $('.fw-page-builder-content').fullpage({
                responsiveWidth: 1024,
            });
		}
	}
	function initOwlCarouselGallery() {
		$('.owl-carousel').owlCarousel({
			loop: true,
            items:1,
            smartSpeed:600,
			nav : true,
			dots : false,
            navText: ['<span class="icon-arrows-left"></span>','<span class="icon-arrows-right"></span>']
        });
    }
    function initWoccommerceUpdateAjaxMiniCart () {
        var data = {
            'action': 'mode_theme_update_mini_cart'
        };
        $.post(
            woocommerce_params.ajax_url, // The AJAX URL
            data, // Send our PHP function
            function(response){
                $('.woocommerce-mini-cart').html(response); // Repopulate the specific element with the new content
            }
        );
	}
	function woocommerceButtonsPlusAndMinus () {
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
            $('input.qty', parent).trigger('change');
        });
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
                $('input.qty', parent).trigger('change');
            }
        });
	}
	function stPrettyPhoto () {
		var markupWhole = '<div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<div class="pp_top"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"><a class="pp_close" href="#"><span class="icon-arrows-remove"></span></a></div> \
						</div> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#"><span class="icon-arrows-right"></span></a> \
											<a class="pp_previous" href="#"><span class="icon-arrows-left"></span></a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<p class="currentTextHolder">0/0</p> \
											</div> \
											<p class="pp_description"></p> \
											{pp_social} \
											<a class="pp_close" href="#"></a> \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
						<div class="pp_bottom"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"></div> \
						</div> \
					</div> \
					<div class="pp_overlay"></div>';
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            hook: 'data-rel',
            animation_speed: 'normal', /* fast/slow/normal */
            slideshow: false, /* false OR interval time in ms */
            autoplay_slideshow: false, /* true/false */
            opacity: 0.80, /* Value between 0 and 1 */
            show_title: true, /* true/false */
            allow_resize: true, /* Resize the photos bigger than viewport. true/false */
            horizontal_padding: 0,
            default_width: 960,
            default_height: 540,
            counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
            theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
            hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
            wmode: 'opaque', /* Set the flash wmode attribute */
            autoplay: true, /* Automatically start videos: True/False */
            modal: false, /* If set to true, only the close button will close the window */
            overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
            keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
            deeplinking: false,
            custom_markup: '',
            social_tools: false,
            markup: markupWhole
        });
	}
	function initBlogMasonry() {

        var holder = $('.st-blog-holder.st-masonry');

        if(holder.length){
            holder.each(function(){
                $(this).waitForImages(function() {
                    $(this).masonry({
                        itemSelector: 'article',
                        percentPosition: true,
                        fitWidth: true,
						gutter: '.st-masonry-gutter',
						columnWidth: '.st-masonry-sizer'
                    });
                    $(this).css('opacity', '1');
                });
            });
        }
	}
	function backToTop () {
		// if ( $('.st-back-to-top').length )  {
		// 	var scrollTrigger = 250,
		// 		backToTop = function () {
		// 			var scrollTop = $(window).scrollTop();
		// 			if ( scrollTop > scrollTrigger ) {
         //                $('.st-back-to-top').addClass('on');
		// 			} else {
         //                $('.st-back-to-top').removeClass('on');
         //            }
		// 		};
         //    backToTop();
         //    $(window).on('scroll', function () {
         //        backToTop();
         //    });
         //    $(document).on('click', $('.st-back-to-top'), function () {
		// 		$('html, body').animate({
		// 			scrollTop: 0
		// 		}, 700);
         //    });
		// }
	}
	function stickyHeader() {
        var lastScrollTop = 0,
            delta = 5,
            navbarHeight = $('.st-page-header').outerHeight();
        $(window).on('scroll', function () {
            hasScrolled();
        });
        hasScrolled();
        function hasScrolled () {
            var scrollTop = $(this).scrollTop();

            if( Math.abs(lastScrollTop - scrollTop) <= delta )
                return;

            if ( scrollTop < navbarHeight ) {
                $('.st-sticky-header-menu').removeClass('st-header-appear');
            }

            if ( scrollTop > lastScrollTop && scrollTop > navbarHeight || navbarHeight * 2 > scrollTop ){
                $('.st-sticky-header-menu').removeClass('st-header-appear');
            } else if ( scrollTop < lastScrollTop ) {
                $('.st-sticky-header-menu').addClass('st-header-appear');
            }
            lastScrollTop = scrollTop;
        };
    }
    function mobileHeaderAppear() {
        var lastScrollTop = 0,
            delta = 5,
            navbarHeight = $('.st-mobile-header').outerHeight(),
            menuOpener = $('.st-mobile-header').find('.st-mobile-header-menu-opener').children();

        $(window).on('scroll', function () {
            hasScrolled();
        });
        var	hasScrolled = function () {
            var scrollTop = $(this).scrollTop();

            if( Math.abs(lastScrollTop - scrollTop) <= delta )
                return;

            if ( scrollTop < navbarHeight ) {
                $('.st-mobile-header').removeClass('st-mobile-header-appear');
                $('.st-mobile-header').removeClass('st-animation-mobile-header');
                $('.st-mobile-header').css({'margin-top':0});
            }
            if ( scrollTop > navbarHeight ) {
                $('.st-mobile-header').addClass('st-animation-mobile-header');
            }
            if ( scrollTop > lastScrollTop && scrollTop > navbarHeight && !menuOpener.hasClass('st-mobile-menu-opened') || navbarHeight * 2 > scrollTop ){
                $('.st-mobile-header').removeClass('st-mobile-header-appear');
                $('.st-mobile-header').css({'margin-top':0});
            } else if ( scrollTop < lastScrollTop ) {
                $('.st-mobile-header').addClass('st-mobile-header-appear');
                $('.st-mobile-header').css({'margin-top': navbarHeight});
            }
            lastScrollTop = scrollTop;
        };
    }
    function countDown() {
	    var countdowns = $('.st-countdown');

	    if ( countdowns.length ) {
	        countdowns.each(function () {
                var elem = $(this),
                    countdownColor,
                    lineColor,
                    year,
                    month,
                    day,
                    hour,
                    minute,
                    numericSize,
                    labelSize;
                year = elem.data('year');
                month = elem.data('month');
                day = elem.data('day');
                hour = elem.data('hour');
                minute = elem.data('minute');
                numericSize = elem.data('amount-size');
                labelSize = elem.data('label-size');
                countdownColor = elem.data('countdown-color');
                lineColor = elem.data('line-color');
                elem.countdown({
                    until: new Date(year, month - 1, day, hour, minute, 44),
                    labels: ['Years', "Months", 'Weeks', "Days", "Hours", "Minutes", "Seconds"],
                    format: 'YODHMS',
                    padZeroes: true,
                    onTick: countDownStyle
                });

                function countDownStyle() {
                    elem.find('.countdown-amount').append('<span class="after" style="background: ' + lineColor + '"></span>');
                    elem.find('.countdown-amount').css({
                        'font-size' : numericSize + 'px',
                        'line-height' : numericSize + 'px',
                        'color' : countdownColor
                    });
                    elem.find('.countdown-period').css({
                        'font-size' : labelSize + 'px',
                        'color' : countdownColor
                    });
                }
            });
        }
    }
    function changeBtnColor () {
	    var buttons = $('.st-btn');
	    function btnHoverColor (button) {
            if(typeof button.data('hover-color') !== 'undefined') {
                function changeButtonColor (event) {
                    event.data.button.css('color', event.data.color);
                };

                var originalColor = button.css('color');
                var hoverColor = button.data('hover-color');

                button.on('mouseenter', { button: button, color: hoverColor }, changeButtonColor);
                button.on('mouseleave', { button: button, color: originalColor }, changeButtonColor);
            }
        }
        function btnHoverBgColor (button) {
            if(typeof button.data('hover-bg-color') !== 'undefined') {
                function changeButtonBg (event) {
                    event.data.button.css('background-color', event.data.color);
                };

                var originalBgColor = button.css('background-color');
                var hoverBgColor = button.data('hover-bg-color');

                button.on('mouseenter', { button: button, color: hoverBgColor }, changeButtonBg);
                button.on('mouseleave', { button: button, color: originalBgColor }, changeButtonBg);
            }
        };
        function btnHoverBorderColor (button) {
            if(typeof button.data('hover-border-color') !== 'undefined') {
                function changeButtonBorder (event) {
                    event.data.button.css('border-color', event.data.color);
                };

                var originalBorderColor = button.css('border-color');
                var hoverBorderColor = button.data('hover-border-color');

                button.on('mouseenter', { button: button, color: hoverBorderColor }, changeButtonBorder);
                button.on('mouseleave', { button: button, color: originalBorderColor }, changeButtonBorder);
            }
        };
        if ( buttons.length ) {
            buttons.each(function () {
                btnHoverColor($(this));
                btnHoverBgColor($(this));
                btnHoverBorderColor($(this));
            });
        }
    }
    changeBtnColor();
    countDown();
    mobileHeaderAppear();
    stickyHeader();
    backToTop();
    initBlogMasonry();
    stPrettyPhoto();
    woocommerceButtonsPlusAndMinus();
    initWoccommerceUpdateAjaxMiniCart();
    initOwlCarouselGallery();
	fullScreenSectionScroll();
	fulwidthMenu();
	stDropDownMenuSetPosition();
	searchBoxFadeToggle();
	mobileMenuSlideToggle();
})(jQuery);
(function ($) {
    $('[data-toggle="tooltip"]').each(function () {
        $(this).tooltip({
        });
    });
})(jQuery);
(function ($) {
    function init() {
        resizeImageAsceptRatio();
        windowResize();
    }
    function windowResize () {
        $(window).resize(function () {
            resizeImageAsceptRatio();
        });
    }
    function resizeImageAsceptRatio () {
        $('[data-resize="image"]').parent().each(function () {
            var $this = $(this),
                ratioHeight    = $this.data('ratio-height'),
                ratioWidth     = $this.data('ratio-width'),
                blockImageWidth = $this.parent().width();
                newHeight      = 0,
                newWidth       = 0;

            newHeight = blockImageWidth * ratioHeight / ratioWidth ;
            newWidth = blockImageWidth;

            $this.css({
                'height' : newHeight + 'px',
                'width'  : newWidth +'px'
            });
        });
    }
    init();
})(jQuery);
(function ($) {
    function init() {
        stOwlCarousel();
    }
    function stOwlCarousel() {
        var sliders = $('.st-owl-slider');
        if ( sliders.length ) {
            sliders.each(function () {
                var slider = $(this),
                    sliderItemsNumbers = slider.children().length,
                    numberOfItems = 1,
                    margin = 0,
                    center = false,
                    autoWidth = false,
                    loop = true,
                    autoplay = true,
                    autoplayHoverPause = true,
                    sliderSpeed = 5000,
                    sliderSpeedAnimation = 600,
                    animateInClass = false,
                    animateOutClass = false,
                    navigation = false,
                    pagination = false;

                if (typeof slider.data('number-of-items') !== 'undefined' && slider.data('number-of-items') !== false) {
                    numberOfItems = slider.data('number-of-items');
                }
                if (typeof slider.data('slider-margin') !== 'undefined' && slider.data('slider-margin') !== false) {
                    margin = slider.data('slider-margin');
                }
                if (slider.data('enable-center') === 'yes') {
                    center = true;
                }
                if (slider.data('enable-auto-width') === 'yes') {
                    autoWidth = true;
                }
                if (slider.data('enable-loop') === 'no') {
                    loop = false;
                }
                if (slider.data('enable-autoplay') === 'no') {
                    autoplay = false;
                }
                if (slider.data('enable-autoplay-hover-pause') === 'no') {
                    autoplayHoverPause = false;
                }
                if (typeof slider.data('slider-speed') !== 'undefined' && slider.data('slider-speed') !== false) {
                    sliderSpeed = slider.data('slider-speed');
                }
                if (typeof slider.data('slider-speed-animation') !== 'undefined' && slider.data('slider-speed-animation') !== false) {
                    sliderSpeedAnimation = slider.data('slider-speed-animation');
                }
                if (typeof slider.data('slider-animate-in') !== 'undefined' && slider.data('slider-animate-in') !== false) {
                    animateInClass = slider.data('slider-animate-in');
                }
                if (typeof slider.data('slider-animate-out') !== 'undefined' && slider.data('slider-animate-out') !== false) {
                    animateOutClass = slider.data('slider-animate-out');
                }
                if (slider.data('enable-navigation') === 'yes') {
                    navigation = true;
                }
                if (slider.data('enable-pagination') === 'yes') {
                    pagination = true;
                }
                if (sliderItemsNumbers <= 1) {
                    loop       = false;
                    autoplay   = false;
                    navigation = false;
                    pagination = false;
                }
                var responsiveNumberOfItems1 = 1,
                    responsiveNumberOfItems2 = 2,
                    responsiveNumberOfItems3 = 3;
                if (numberOfItems < 3) {
                    responsiveNumberOfItems2 = numberOfItems;
                    responsiveNumberOfItems3 = numberOfItems;
                }
                slider.owlCarousel({
                    items: numberOfItems,
                    loop: loop,
                    autoplay: autoplay,
                    autoplayHoverPause: autoplayHoverPause,
                    autoplayTimeout: sliderSpeed,
                    smartSpeed: sliderSpeedAnimation,
                    margin: margin,
                    center: center,
                    autoWidth: autoWidth,
                    animateInClass : animateInClass,
                    animateOut : animateOutClass,
                    dots: pagination,
                    nav: navigation,
                    navText: ['<span class="icon-arrows-left"></span>','<span class="icon-arrows-right"></span>'],
                    responsive: {
                        0: {
                            items: responsiveNumberOfItems1,
                            margin: 0,
                            center: false,
                            autoWidth: false
                        },
                        680: {
                            items: responsiveNumberOfItems2
                        },
                        768: {
                            items: responsiveNumberOfItems3
                        },
                        1024: {
                            items: numberOfItems
                        }
                    }
                });
            });
        }
    }
    init();
})(jQuery);