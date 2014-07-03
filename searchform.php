<div class="searchform">
<form method="get" action="<?php echo home_url(); ?>/">
	<p>
	<input type="text" name="s" id="s" placeholder="<?php _e( 'Search', 'universal' ); ?>" value="<?php echo trim( get_search_query() ); ?>" /> 
	<input type="submit" name="submit" value="<?php _e( 'Go', 'universal' ); ?>" class="button" />
	</p>
</form>
</div>
