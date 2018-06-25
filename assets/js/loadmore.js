(function($){
    $(document).on('click', '.st-load-more', function(e){
        e.preventDefault();
        var currentPage = Number($(this).parent().attr('data-next-page')),
            maxPage = Number($(this).parent().data('max-num-page')),
            categoriesIn,
            categoriesNotIn,
            postsPerPage;
        if (typeof $(this).parent().data('category-in') !== 'undefined' && $(this).parent().data('category-in') !== false) {
            categoriesIn = $(this).parent().data('category-not-in');
        }
        if (typeof $(this).parent().data('category-not-in') !== 'undefined' && $(this).parent().data('category-not-in') !== false) {
            categoriesNotIn = $(this).parent().data('category-not-in');
        }
        if (typeof $(this).parent().data('posts-per-page') !== 'undefined' && $(this).parent().data('posts-per-page') !== false) {
            postsPerPage = $(this).parent().data('posts-per-page');
        }
        var button = $(this),
            data = {
                'action': 'loadmore',
                'page' : currentPage,
                'category__in' : categoriesIn,
                'category__not_in' : categoriesNotIn,
                'posts_per_page' : postsPerPage
            };
        $.ajax({
            url : alo_load_more_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    // button.text( 'Load More' ).prev().after(data); // insert new posts
                    var $data = $( data );
                    button.parent().append($data).masonry( 'appended', $data );
                    ++currentPage;
                    button.parent().attr('data-next-page', currentPage);
                    stOwlCarousel();
                    if ( currentPage === maxPage )
                        button.remove(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            },
            error : function (data) {
                console.log(data);
            }
        });
    });
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
                    navigation = true,
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
})(jQuery);