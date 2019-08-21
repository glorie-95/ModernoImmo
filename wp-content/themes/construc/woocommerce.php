<?php get_header(); ?>
<section class="shop-page-main-block section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 order-1 order-md-0">
				<aside class="widget-area">
					<?php dynamic_sidebar( 'woocommerce-sidebar' ); ?>
				</aside>
			</div>
			<div class="col-sm-9 order-0 order-md-1">
				<?php woocommerce_content(); ?>
			</div>
			
		</div>
	</div>
</section>
<?php get_footer(); ?>
