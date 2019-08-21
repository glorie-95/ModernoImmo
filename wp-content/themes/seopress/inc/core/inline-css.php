<?php

function seopress_inline_css()
{
	$seopress_product_per_column = absint( get_theme_mod( 'seopress_product_per_column', '4' ) );
	
	$seopress_custom_css = "";
	
	//for sticky post
	if( get_theme_mod( 'seopress_sticky_dt_disply', '1' ) == 0 )
	{
		$seopress_custom_css .= "
		.sticky .post-date {
			display: none;
		}
		";
	}
	//for sticky post END
	
	//for woo
	if( $seopress_product_per_column == 2 )
	{
		$seopress_custom_css .= "
		@media (min-width: 768px) {
			.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
				width: 46%;
			}
		}
		";
	}
	
	if( $seopress_product_per_column == 3 )
	{
		$seopress_custom_css .= "
		@media (min-width: 768px) {
			.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
				width: 30%;
			}
		}
		";
	}
	
	if( $seopress_product_per_column == 4 )
	{
		$seopress_custom_css .= "
		@media (min-width: 768px) {
			.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
				width: 22%;
			}
		}
		";
	}
	
	if( $seopress_product_per_column == 5 )
	{
		$seopress_custom_css .= "
		@media (min-width: 768px) {
			.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
				width: 16.9%;
			}
		}
		";
	}

	wp_add_inline_style( 'seopress-style-core', $seopress_custom_css );
}
add_action( 'wp_enqueue_scripts', 'seopress_inline_css' );

