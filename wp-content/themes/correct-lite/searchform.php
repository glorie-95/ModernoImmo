<?php
/**
 * The template for displaying search forms in Correct Lite
 *
 * @package Correct Lite
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search...', 'correct-lite' ); ?>" value="<?php echo  get_search_query() ; ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'correct-lite' ); ?>">
</form>
