(function($){
    $('.st-load-more').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': alo_load_more_script.posts, // that's how we get params from wp_localize_script() function
                'page' : alo_load_more_script.current_page
            };

        $.ajax({
            url : alo_load_more_script.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( 'Load More' ).prev().before(data); // insert new posts
                    alo_load_more_script.current_page++;

                    if ( alo_load_more_script.current_page == alo_load_more_script.max_page )
                        button.remove(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
})(jQuery);