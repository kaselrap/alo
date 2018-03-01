(function($) {
    function initBlogMasonry() {

        var holder = $('.st-blog-holder.st-masonry');

        if(holder.length){
            holder.each(function(){
                $(this).waitForImages(function() {
                    $(this).masonry({
                        itemSelector: 'article',
                        percentPosition: true,
                        gutter: '.st-masonry-gutter',
                        columnWidth: '.st-masonry-sizer',
                        transitionDuration: '0.2s',
                        resize: true
                    });
                    $(this).css({'opacity': '1','width':'100%'});
                });
            });
        }
    }
    $(document).on('click', '.st-category-item', function () {
        var value = $(this).data('filter');
        if ( value == 'all' ) {
            $('article').show(1000, function () {
                initBlogMasonry();
            });
            initBlogMasonry();
        } else {
            $('article').not('.fw-portfolio-category-' + value).hide(1000, function () {
                initBlogMasonry();
            });
            $('article').filter('.fw-portfolio-category-' + value).show(1000, function () {
                initBlogMasonry();
            });
        }
        $(this).addClass('active').siblings().removeClass('active');
    });
})(jQuery);