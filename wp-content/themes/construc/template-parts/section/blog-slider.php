<?php
/**
 *
 * Display Blog Slider
 *
 * @package Construc
 */

?>

<section class="blog-slider-area section-padding">
	<div class="container">
		<?php if (true == construc_blog_section_title_switch()) :?>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title  text-center">
				    <h2><?php echo esc_html(get_theme_mod('blog_main_title')); ?></h2>
				    <p><?php echo wp_kses_post( get_theme_mod('blog_subtitle') ); ?></p>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="row blog-slider-active owl-carousel">
			<?php
			$getpostnumber = absint(get_theme_mod('blog_post_count'));
			$postcount = (!empty($getpostnumber) ? $getpostnumber : 5);
			$slider_post = new WP_Query(array(
		        'post_type' =>  'post',
		        'posts_per_page'    =>  $postcount,
		        'ignore_sticky_posts' => 1
		    ));
			while ($slider_post->have_posts()) :
				$slider_post->the_post();
			?>
		    
		        <div class="single-blog">
		            <div class="blog-thumb">
		                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
		                
		            </div>
		            <div class="blog-title">
		                <div class="blog-desc">
		                    <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
		                    <p class="postdate"><?php construc_posted_on(); ?></p>
		                    <p><?php echo construc_get_excerpt(150); ?></p>
		                </div>
		            </div>
		            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'construc'); ?><i class="icofont-arrow-right"></i></a>
		        </div>
			<?php
			endwhile; wp_reset_postdata();?>
		</div>
	</div>
</section>