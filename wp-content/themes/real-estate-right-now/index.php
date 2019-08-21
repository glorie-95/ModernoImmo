<?php

/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * @link http://codex.wordpress.org/Template_Hierarchy

 *

 * @package real-estate-right-now

 * @subpackage Real_estate

 * @since real estate 1.0

 */

$realestaterightnow_blog_style = trim(get_theme_mod('realestaterightnow_blog_style', '3'));

$realestaterightnow_blog_style = esc_attr($realestaterightnow_blog_style);

/*

function realestaterightnow_blog_scripts(){

wp_enqueue_script( 'realestaterightnow-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' ), '20160816', true );

}

if ($realestaterightnow_blog_style == '3')

add_action( 'wp_enqueue_scripts', 'realestaterightnow_blog_scripts' );

*/

$realestaterightnow_blog_sidebar = trim(get_theme_mod('realestaterightnow_blog_sidebar','1'));

$realestaterightnow_blog_sidebar = esc_attr($realestaterightnow_blog_sidebar);

get_header();

if ($realestaterightnow_blog_style == '2')

    echo '<div class="realestaterightnow_row_space">'; 

if($realestaterightnow_blog_sidebar != '1')

  echo '<div id="primary" class="content-area-full-with">';

else

  echo '<div id="primary" class="content-area">';

?>

  	<main id="main" class="site-main" role="main">

<?php if (have_posts()): ?>

	<?php if (is_home() && !is_front_page()): ?>

				<header>

					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header>

	<?php endif;

    if ($realestaterightnow_blog_style == '3')

        echo '<div class="row realestaterightnow_blog_grid">';

    // Start the loop.

    while (have_posts()):

        the_post();

        /*

        * Include the Post-Format-specific template for the content.

        * If you want to override this in a child theme, then include a file

        * called content-___.php (where ___ is the Post Format name) and that will be used instead.

        */

        if ($realestaterightnow_blog_style == '3')

            get_template_part('template-parts/content-masonry', get_post_format());

        elseif ($realestaterightnow_blog_style == '2')

            get_template_part('template-parts/content-list', get_post_format());

        else

            get_template_part('template-parts/content', get_post_format());

        // End the loop.

    endwhile;

    if ($realestaterightnow_blog_style == '3' or $realestaterightnow_blog_style == '2')

        echo '</div>';

    // Previous/next page navigation.

    the_posts_pagination(array(

        'prev_text' => __('Previous page', 'real-estate-right-now'),

        'next_text' => __('Next page', 'real-estate-right-now'),

        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page',

            'real-estate-right-now') . ' </span>',

        ));

// If no content, include the "No posts found" template.

else:

    get_template_part('template-parts/content', 'none');

endif; ?>

		</main><!-- .site-main -->

	</div><!-- .content-area -->

<?php     global $wp_query, $template;

    $post_id = $wp_query->get_queried_object_id();

    //

    $default_blog_page = get_option('page_for_posts');

    $realestaterightnow_blog_sidebar = trim(get_theme_mod('realestaterightnow_blog_sidebar', '1'));

    $realestaterightnow_blog_sidebar = esc_attr($realestaterightnow_blog_sidebar);

    /*

    echo '<hr>';

    echo $post_id; 

    echo '<hr>';

    echo $default_blog_page;      

    echo '<hr>';

    die();

    */

if ($post_id == $default_blog_page) {

        if ($realestaterightnow_blog_sidebar == '1')

            get_sidebar();

} else

        get_sidebar();

get_footer();

function get_the_content_with_formatting()

    {

        $content = get_the_content();

        $content = apply_filters('the_content', $content);

        $content = str_replace(']]>', ']]&gt;', $content);

        return $content;

    }

function excerpt($limit)

    {

        $excerpt = wp_trim_words(get_the_excerpt(), $limit);

        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

        return '<p>' . $excerpt . '</p>';

    } 

?>