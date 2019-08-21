<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package construc
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function construc_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'construc_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function construc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'construc_pingback_header' );


if ( ! function_exists( 'construc_comment_list' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Shape 1.0
	 */
	function construc_comment_list( $comment, $args, $depth ) {

		extract( $args, EXTR_SKIP );

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
		?>
  <<?php echo esc_attr( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
		<?php if ( 'div' == $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID(); ?>" class="comment-body review-list">
	<?php endif; ?>
	<div class="single-comment">
		<div class="commenter-image">
			<?php
			if ( 0 != $args['avatar_size'] ) {
				echo get_avatar( $comment, $args['avatar_size'] );}
			?>
		</div>
		<div class="commnenter-details">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'construc' ); ?></em>
			<br />
		<?php endif; ?>
			<h4><?php printf( wp_kses_post( '%s', 'construc' ), sprintf( '%s', get_comment_author_link() ) ); ?></h4>
			<div class="comment-time">
				<p><time datetime="<?php comment_time( 'c' ); ?>">
								<?php
									/* translators: 1: comment date, 2: comment time */
									printf( wp_kses_post( '%1$s at %2$s', 'construc' ), get_comment_date( '', $comment ), get_comment_time() );
								?>
							</time></p>
			</div>
				<?php comment_text(); ?>
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						)
					)
				);
				?>
		</div>
	</div>
		<?php if ( 'div' == $args['style'] ) : ?>
  </div>
			<?php
  endif;

	}
endif; // ends check for construc_comment_list()

function construc_get_excerpt( $limit, $source = null ) {

	if ( $source == 'content' ? ( $excerpt = get_the_content() ) : ( $excerpt = get_the_excerpt() ) ) {
		$excerpt = $excerpt;
	}
	$excerpt = preg_replace( ' (\[.*?\])', '', $excerpt );
	$excerpt = strip_shortcodes( $excerpt );
	$excerpt = strip_tags( $excerpt );
	$excerpt = substr( $excerpt, 0, $limit );
	$excerpt = substr( $excerpt, 0, strripos( $excerpt, ' ' ) );
	$excerpt = trim( preg_replace( '/\s+/', ' ', $excerpt ) );
	return $excerpt;
}

if ( ! function_exists( 'construc_comment_popup_link' ) ) {
	function construc_comment_popup_link() {
		comments_popup_link(
			__( '<span class="fa fa-comment-o"></span> No Comment', 'construc' ),
			__( '<span class="fa fa-comment-o"></span> 1 Comment', 'construc' ),
			__( '<span class="fa fa-comment-o"></span> % Comments', 'construc' ),
			'construc-comment',
			__( '<span class="fa fa-comment-o"></span> Comments are Closed', 'construc' )
		);
	}
}

/*
 * custom pagination with bootstrap .pagination class
 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
 */
function construc_pagination( $echo = true ) {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	$pages = paginate_links(
		array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
			'next_text'    => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
		)
	);
	if ( is_array( $pages ) ) {
		$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<nav><ul class="pagination">';
		foreach ( $pages as $page ) {
			$pagination .= "<li class='page-item'>$page</li>";
		}
		$pagination .= '</ul></nav>';
		if ( $echo ) {
			echo wp_kses_post( $pagination );
		} else {
			return $pagination;
		}
	}
}



// modify woocommerce
add_filter( 'woocommerce_show_page_title', '__return_false' );

add_action( 'woocommerce_after_shop_loop_item_title', 'construc_wc_before_shop_loop_item_title', 0 );
function construc_wc_before_shop_loop_item_title() {
	?>
	<div class="price-rate-rapper">
	<?php
}
add_action( 'woocommerce_after_shop_loop_item_title', 'construc_wc_after_shop_loop_item_title', 15 );
function construc_wc_after_shop_loop_item_title() {
	?>
	</div>
	<?php
}

add_filter( 'get_product_search_form', 'me_custom_product_searchform' );
/**
 * Filter WooCommerce  Search Field
 */
function me_custom_product_searchform( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/' ) ) . '">
                        <div>
                                <label class="screen-reader-text" for="s">' . __( 'Search for:', 'construc' ) . '</label>
                                <button type="submit" id="searchsubmit" />
                                        <i class="fa fa-search"></i>  
                                </button>  
                                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search products...', 'construc' ) . '" />                           
                                 <input type="hidden" name="post_type" value="product" />
                        </div>
                </form>';
	return $form;
}



add_filter( 'woocommerce_output_related_products_args', 'construc_related_products_args', 20 );
function construc_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}

if (!function_exists('construc_credit_dont_remove')) {
	function construc_credit_dont_remove(){
		?>
		<div class="dont-remove-this-link">
			<a href="<?php echo esc_url('https://theimran.com/themes/wordpress-theme/construc-construction-and-architecture-wordpress-theme/');?>" class="fa fa-shield" title="<?php esc_html_e('Please Buy Pro Version To Remove This Link.', 'construc');?>"></a></div>
		<?php
	}
}

