<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>" placeholder="Search and hit enter..." value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit">Search</button>
</form>