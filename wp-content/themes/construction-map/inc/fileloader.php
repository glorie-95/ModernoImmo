<?php


require get_template_directory() . '/inc/golbal-theme-mod.php';
require get_template_directory() . '/inc/repeater-class.php';

require get_template_directory() . '/inc/default.php';
require get_template_directory() . '/inc/themes-make/customizer/slider-sections/slider-field-sanitization.php';
require get_template_directory() . '/inc/themes-make/customizer/slider-sections/slider-function.php';
require get_template_directory() . '/inc/customizer-function-category.php';
require get_template_directory() . '/inc/themes-make/customizer/top-header-customizer/sanitize-checkbox.php';
require get_template_directory() . '/inc/themes-make/metabox/metabox-icon.php';
require get_template_directory() . '/inc/themes-make/widgets/service-widgets.php';
require get_template_directory() . '/inc/themes-make/widgets/Quote-widgets.php';
require get_template_directory() . '/inc/themes-make/widgets/team-widgets.php';
require get_template_directory() . '/inc/themes-make/widgets/work.php';
require get_template_directory() . '/inc/themes-make/widgets/information.php';


if (class_exists('woocommerce')){

        require get_template_directory() . '/inc/themes-make/widgets/ecommerce-shop-widget.php';
}

require get_template_directory() . '/inc/themes-make/widgets/feature-section.php';
require get_template_directory() . '/inc/themes-make/widgets/testimonials-widgets.php';
require get_template_directory() . '/inc/themes-make/widgets/recents-post-widgets.php';
require get_template_directory() . '/inc/themes-make/metabox/metabox-page-post-sidebar.php';
require get_template_directory() . '/inc/themes-make/customizer/layout-design/constructions-layout-functions.php';
require get_template_directory() . '/inc/themes-make/customizer/theme-options-customizer/theme-options-functions.php';
require get_template_directory() . '/inc/hook/dynamic-style-css.php';
require get_template_directory() . '/inc/hook/resets-color.php';


/*theme activation plugins*/
require get_template_directory() . '/library/TGM/class-tgm-plugin-activation.php';
require get_template_directory() . '/library/TGM/plugin-slug.php';
require get_template_directory() . '/library/demo-import.php';














