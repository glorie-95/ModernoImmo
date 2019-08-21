<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('mega_construction_above_contact_section'); ?>

<?php if( get_theme_mod( 'mega_construction_address' ) != '' ||  get_theme_mod( 'mega_construction_address1' ) != '' ||  get_theme_mod( 'mega_construction_phone' ) != '' ||  get_theme_mod( 'mega_construction_phone1' ) != '' ||  get_theme_mod( 'mega_construction_email' ) != '' ||  get_theme_mod( 'mega_construction_email1' ) != '' || get_theme_mod( 'mega_construction_button_link' ) != '' ) { ?>
  <section id="contact-us">
    <div class="container"> 
      <div class="row">   
        <div class="col-lg-3 col-md-3">
          <?php if( get_theme_mod( 'mega_construction_address' ) != '') { ?>
          <div class="row">
            <div class="col-lg-2 col-md-12">
              <i class="fas fa-map-marker"></i>
            </div>
            <div class="col-lg-10 col-md-12">
              <p><?php echo esc_html( get_theme_mod('mega_construction_address','') ); ?></p>
              <p><?php echo esc_html( get_theme_mod('mega_construction_address1','') ); ?></p>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
          <div class="phone">
            <div class="row">
              <div class="col-lg-2 col-md-12">
                <i class="fas fa-phone"></i>
              </div>
              <div class="col-lg-10 col-md-12">
                <p><?php echo esc_html( get_theme_mod('mega_construction_phone','') ); ?></p>
                <p><?php echo esc_html( get_theme_mod('mega_construction_phone1','') ); ?></p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>   
        <div class="col-lg-3 col-md-3">
          <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
          <div class="row">
            <div class="col-lg-2 col-md-12">
              <i class="fab fa-telegram-plane"></i>
            </div>
            <div class="col-lg-10 col-md-12">
              <p><?php echo esc_html( get_theme_mod('mega_construction_email','') ); ?></p>
              <p><?php echo esc_html( get_theme_mod('mega_construction_email1','') ); ?></p>
            </div>
          </div>
          <?php }?>
        </div>    
        <?php if( get_theme_mod( 'mega_construction_button_link','' ) != '') { ?>
          <div class="col-lg-3 col-md-3">
            <div class="contactbtn">
              <a href="<?php echo esc_url( get_theme_mod('mega_construction_button_link','' ) ); ?>"><?php esc_html_e( 'SPECIAL OFFERS','mega-construction' ); ?></a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>
<?php }?>
  
<?php do_action('mega_construction_below_about_section'); ?>

<?php if( get_theme_mod( 'mega_construction_about_setting','' ) != '') { ?>
  <?php /*--About Us--*/?>
  <section class="about">
    <div class="container">
      <?php
      $postData1 =  get_theme_mod('mega_construction_about_setting');
        if($postData1){
          $args = array( 'name' => esc_html($postData1 ,'mega-construction'));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <div class="col-lg-8 col-md-7">
                <div class="abt-image">
                  <img src="<?php the_post_thumbnail_url('full'); ?>"/>              
                </div>
              </div>
              <div class="col-lg-4 col-md-5">
                <?php if( get_theme_mod('mega_construction_sec1_title') != ''){ ?>     
                  <h3><?php echo esc_html(get_theme_mod('mega_construction_sec1_title','')); ?></h3>
                <?php }?>
                <div class="textbox">
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('VIEW MORE','mega-construction'); ?><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div> 
            </div>         
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
             <div class="no-postfound"></div>
          <?php
      endif; } ?>
    </div>
  </section>
<?php }?>

<?php do_action('mega_construction_after_about_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>