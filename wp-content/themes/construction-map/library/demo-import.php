<?php
/* Demo importer */
add_filter( 'pt-ocdi/import_files', 'construction_map_import_demo_data' );
if ( ! function_exists( 'construction_map_import_demo_data' ) ) {
    function construction_map_import_demo_data() {
        return array(
            array(
                'import_file_name'             => __('Demo Import','construction-map'),
                'categories'                   => array( 'Category 1', 'Category 2' ),
                'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/content.xml',
                'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/widget.wie',
                'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/customize.dat',
            ),
        );
    }
}

function construction_map_after_import_setup() {

    // Assign menus to their locations.
    $social_link= get_term_by( 'name', 'Social Link', 'nav_menu' );
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'social-link' => $social_link->term_id,
            'primary' => $main_menu->term_id,
        )
    );





    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'construction_map_after_import_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/*deactivate plugins after import data */

function construction_map_deactivate_ocdi() {
    if (!class_exists('OCDI_Plugin')) {
        return;
    }
    if (get_option('construction_map_demo_imported') == 1) {
        deactivate_plugins('one-click-demo-import/one-click-demo-import.php');
    }
}
add_action('admin_init', 'construction_map_deactivate_ocdi');

function construction_map_ocdi_after_import_setup() {
    update_option('construction_map_demo_imported', 1);
}
add_action( 'pt-ocdi/after_import', 'construction_map_ocdi_after_import_setup' );