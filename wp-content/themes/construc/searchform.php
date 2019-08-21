<?php
/**
 *
 * Redesigning Default Search form
 *
 * @package Construc
 */

?>


<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" placeholder="<?php esc_attr_e( 'Search...', 'construc' ); ?>">
	<button class="fa fa-search" type="submit"></button>
</form>
