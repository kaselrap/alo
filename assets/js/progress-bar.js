(function($) {
    'use strict';
    $(document).ready(stInitProgressBar);
    function stInitProgressBar () {
        var progressBar = $('.st-progress-bar');
        if ( progressBar.length ) {
            progressBar.each(function () {
                var stBarContent = $(this).find('.st-pb-content'),
                    percentage = stBarContent.data('percentage');

                $(this).appear(function () {
                    stInitCounterProgressBar($(this), percentage);

                    stBarContent.css({'width':'0%'});
                    stBarContent.animate({'width': percentage + '%'}, 2000);
                });
            });
        }
    }
    function stInitCounterProgressBar(progressBar, percentage) {
        var percent = progressBar.find('.st-pb-percent');
        
        if ( percent.length ) {
            percent.each(function () {
                $(this).css({'opacity':'1'});

                $(this).countTo({
                    from: 0,
                    to: percentage,
                    speed: 2000,
                    refreshInterval: 50
                });
            });
        }
    }
})(jQuery);