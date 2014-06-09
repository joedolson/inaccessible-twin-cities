<div class="searchform">
<form method="get" action="<?php echo home_url(); ?>/">
	<p>
	<input type="text" name="s" id="s" placeholder="<?php _e( 'Search', 'accessible-twin-cities' ); ?>" value="<?php echo trim( get_search_query() ); ?>" /> 
	<input type="submit" name="submit" value="<?php _e( 'Search', 'accessible-twin-cities' ); ?>" class="button" />
	</p>
</form>
</div>
