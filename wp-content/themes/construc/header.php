<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('js'); ?>>
	<?php 
	if (get_theme_mod('prealoader_on_off', 'false') == true) {
		?>
			<div id="preloader" style="background-image: url(<?php echo esc_url(get_theme_mod('prealoader_image'));?>);"></div>
		<?php
	}
	 ?>
	
<div id="page" class="site">
<?php
	$headerlayout = get_theme_mod('header_layout', 'one');
	get_template_part( 'template-parts/header', $headerlayout );
 ?>

<?php
	get_template_part( 'template-parts/page', 'banner' );
	if (function_exists('construc_breadcrumb_section')) {
		construc_breadcrumb_section();
	}
?>
