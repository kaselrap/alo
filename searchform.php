<form role="search" method="get" class="st-fullscrean-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="st-form">
        <input type="text" placeholder="<?php echo _x( 'Search for...', 'input'); ?>" value="<?php echo get_search_query(); ?>" name="s" class="st-search-field" autocomplete="off" />
        <button type="submit" class="st-search-submit">
			<span class="fw-icon">
				<i class="fa fa-search"></i>
			</span>
        </button>
        <div class="st-search-line"></div>
    </div>
</form>