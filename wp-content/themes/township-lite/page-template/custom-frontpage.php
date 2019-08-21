<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Township Lite
 */

get_header(); ?>

<?php do_action( 'township_lite_above_slider' ); ?>

<?php if( get_theme_mod('township_lite_slider_arrows') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'township_lite_slider_page' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h2><?php the_title();?></h2>
			              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( township_lite_string_limit_words( $excerpt,15 ) ); ?></p>
			              	<a class="getin-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('GET IN TOUCH','township-lite'); ?></a>
			            </div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section> 
<?php }?>

<?php do_action( 'township_lite_below_slider' ); ?>

<?php if( get_theme_mod('township_lite_main_title') != ''){ ?>	
	<section id="about" class="darkbox">
		<?php if( get_theme_mod('township_lite_main_title') != ''){ ?>
		    <div class="heading-line">
		      <h3><?php echo esc_html(get_theme_mod('township_lite_main_title','')); ?> </h3>
		    </div>
	    <?php } ?>
		<div class="container">
			<div class="row">
			<?php
				$catData=  get_theme_mod('township_lite_blogcategory_setting');
	            if($catData){
		         	$page_query = new WP_Query(array( 'category_name' => esc_html($catData,'township-lite')));?>
			  	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
			  		<div class="col-lg-4 col-md-4"> 
			  			<div class="row">
					    	<div class="col-lg-3 col-md-3">
					    		<div class="abt-img-box"><?php the_post_thumbnail(); ?></div>
					    	</div>
					    	<div class="col-lg-9 col-md-9">
					    		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					    		<p><?php $excerpt = get_the_excerpt(); echo esc_html( township_lite_string_limit_words( $excerpt,20 ) ); ?></p>
					    	</div>
					    </div>
				    </div>
				    <?php endwhile;
				    wp_reset_postdata();
				} ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<?php }?>

<?php do_action( 'township_lite_below_about' ); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>