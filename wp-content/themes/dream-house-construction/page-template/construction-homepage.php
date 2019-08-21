<?php

/** 
* Template Name: Construction Homepage 
*/

get_header();

get_template_part( 'template-parts/homepage' , 'slider' );
get_template_part( 'template-parts/homepage' , 'about' );
get_template_part( 'template-parts/homepage' , 'services' );
get_template_part( 'template-parts/homepage' , 'about-2' );
get_template_part( 'template-parts/homepage' , 'portfolio' );
get_template_part( 'template-parts/homepage' , 'calltoaction' );
get_template_part( 'template-parts/homepage' , 'team' );
get_template_part( 'template-parts/homepage' , 'companyfacts' );
get_template_part( 'template-parts/homepage' , 'testimonials' );
get_template_part( 'template-parts/homepage' , 'news' );
get_template_part( 'template-parts/homepage' , 'partners' );

get_footer();