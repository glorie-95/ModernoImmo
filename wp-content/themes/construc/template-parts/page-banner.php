<?php
/**
 *
 * Page header section
 *
 * @package Construc
 */

global $post;
$pageheader = true;
$frontpageheader = get_theme_mod( 'frontpage_header_on_off', true );
$blogpageheader = get_theme_mod( 'blogpage_template_header_on_off', true );
if ( is_front_page() ) {
	if ( is_page_template( 'frontpage.php' ) ) {
			if (true == $frontpageheader) {
				$pageheader = true;
			}else{
				$pageheader = false;
			}
		}
	if ( is_page_template( 'blankpage.php' ) ) {
		$pageheader = false;
	}
	if (is_page_template( 'fullwidth.php' )) {
			$pageheader = true;
	}
	
} else {
	if ( construc_is_blog() ) {
		if (is_home()) {
			if (true == $blogpageheader) {
				$pageheader = true;
			}else{
				$pageheader = false;
			}
		}else{
			$pageheader = true;
		}
	} elseif ( is_page() ) {
		if ( is_page_template( 'frontpage.php' ) ) {
			if (true == $frontpageheader) {
				$pageheader = true;
			}else{
				$pageheader = false;
			}
		}
		if (is_page_template( 'fullwidth.php' )) {
			$pageheader = true;
		}
		if ( is_page_template( 'blankpage.php' ) ) {
			$pageheader = false;
		}
	} else {
		$pageheader = true;
	}
}
$header_image = ( has_header_image() ? get_header_image() : get_theme_file_uri( 'asset/img/home.jpg' ) );

if ( true == $pageheader ) :?>
<section class="page-header-section" style="background-image: url(<?php echo esc_url( $header_image ); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="paget-title">
				<h2>
				<?php
				if ( is_home() ) {
						echo esc_html(get_theme_mod('blogpage_title', __( 'Our Blog', 'construc' )));
				} else {
					wp_title(' ');
				}
				?>
					</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
