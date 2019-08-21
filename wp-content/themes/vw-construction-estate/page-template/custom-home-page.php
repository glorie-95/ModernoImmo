<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'vw_construction_estate_above_slider' ); ?>

<?php if( get_theme_mod('vw_construction_estate_slider_hide_show') != ''){ ?>
  	<section class="slider">
	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
	      <?php $pages = array();
	        for ( $count = 1; $count <= 4; $count++ ) {
	          $mod = intval( get_theme_mod( 'vw_construction_estate_slider_page' . $count ));
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
	                <h2><?php the_title(); ?></h2>
	                <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_construction_estate_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_construction_estate_slider_excerpt_number','30')))); ?></p>
	                <div class="more-btn">              
	                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('DISCOVER MORE','vw-construction-estate'); ?></a>
	                </div>
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
	        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
	      </a>
	      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
	      </a>
	    </div>  
    	<div class="clearfix"></div>
  	</section> 
<?php }?>


<?php do_action( 'vw_construction_estate_below_slider' ); ?>

<?php /*--Contact Us--*/?>
<?php if( get_theme_mod( 'vw_construction_estate_contact_number') != '' || get_theme_mod( 'vw_construction_estate_contact_title' )!= '' ||get_theme_mod( 'vw_construction_estate_contact_content' )!= ''||get_theme_mod( 'vw_construction_estate_contact_link' )!= ''){ ?>
	<section id="contact">
		<div class="row m-0">
			<div class="col-lg-3 col-md-3 contact-no">
				<?php if( get_theme_mod('vw_construction_estate_contact_number') != ''){ ?>
		    		<i class="fas fa-phone-square"></i><span class="subtitle"><?php echo esc_html(get_theme_mod('vw_construction_estate_contact_number','')); ?></span>
		    	<?php }?>
			</div>
			<div class="col-lg-9 col-md-9 contact-content">
				<div class="row">
					<div class="col-lg-9 col-md-8">
						<?php if( get_theme_mod('vw_construction_estate_contact_title') != ''){ ?>
				    		<h3 class="subtitle"><?php echo esc_html(get_theme_mod('vw_construction_estate_contact_title','')); ?></h3>
				    	<?php }?>
				    	<?php if( get_theme_mod('vw_construction_estate_contact_content') != ''){ ?>
				    		<p class="subtitle"><?php echo esc_html(get_theme_mod('vw_construction_estate_contact_content','')); ?></p>
				    	<?php }?>
				    </div>
				    <div class="col-lg-3 col-md-4">
				    	<?php if( get_theme_mod('vw_construction_estate_contact_text') != ''){ ?>
					    	<div class ="contact-btn">
					          	<a href="<?php echo esc_url(get_theme_mod('vw_construction_estate_contact_link','')); ?>"><span><?php echo esc_html(get_theme_mod('vw_construction_estate_contact_text','')); ?></span>
					          		<i class="fas fa-arrow-right"></i>
					          	</a>
					        </div>
				        <?php }?>
				    </div>
				</div>
			</div>
		</div>
	</section>
<?php }?>

<?php do_action( 'vw_construction_estate_below_consultant' ); ?>

<?php /*--About Us--*/?>
<?php if( get_theme_mod('vw_construction_estate_about_setting') != ''){ ?>
	<section class="about-section">
	  	<div class="container-fluid">
	    	<?php
	      	$postData1=  get_theme_mod('vw_construction_estate_about_setting');
	        if($postData1){
	        $args = array( 'name' => esc_html($postData1 ,'vw-construction-estate'));
	      	$query = new WP_Query( $args );
	      	if ( $query->have_posts() ) :
	        	while ( $query->have_posts() ) : $query->the_post(); ?>
	        	<div class="row">
		        	<div class="abt-image col-lg-4 col-md-4">
		          		<img src="<?php the_post_thumbnail_url('full'); ?>"/>
		          	</div>
		          	<div class="col-lg-8 col-md-8 content-sec">
		            	<h3><?php the_title(); ?></h3>
		            	<p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_construction_estate_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_construction_estate_about_excerpt_number','30')))); ?></p>
		            	<div class ="about-btn">
		              		<a href="<?php echo esc_url( the_permalink() ); ?>"><span><?php echo esc_html(get_theme_mod('vw_construction_estate_about_name',__('DISCOVER MORE','vw-construction-estate'))); ?></span></a>
		            	</div>
		          	</div>  
	          	</div>        	
	        <?php endwhile; 
	        wp_reset_postdata();?>
	        <?php else : ?>
	          <div class="no-postfound"></div>
	        <?php
	    	endif; }?>
	  	</div>
	</section>
<?php }?>

<?php do_action( 'vw_construction_estate_below_about' ); ?>

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>