<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage nirman-construction
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('nirman_construction_footer_copy',__('Construction WordPress Theme By','nirman-construction'))); ?> <?php nirman_construction_credit(); ?></p>
</div>