<?php
/**
 * @package somalite
 */

get_header();

somalite_get_page_title($blogtitle=false,$shop=true); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
            get_template_part( 'template-parts/content', 'woocommerce' );           
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
	get_footer();
?>