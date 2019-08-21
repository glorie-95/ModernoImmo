=== Metrolo ===
Contributors: wphoot
Tags: one-column, two-columns, three-columns, left-sidebar, right-sidebar, custom-background, custom-colors, custom-menu, custom-logo, featured-images, footer-widgets, full-width-template, microformats, sticky-post, theme-options, threaded-comments, translation-ready, e-commerce, entertainment, news
Requires at least: 4.0
Tested up to: 5.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Metrolo is a responsive WordPress theme with a bold modern design.

== Description ==

Metrolo is a responsive WordPress theme with a bold modern design. For more information about Metrolo please go to https://wphoot.com/themes/metrolo/ Theme support is available at https://wphoot.com/support/ You can also check out the theme instructions at https://wphoot.com/support/metrolo/ and demo at https://demo.wphoot.com/metrolo/ for a closer look.

== Frequently Asked Questions ==

= How to install Metrolo =

1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in 'Metrolo' in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.

= How to get theme support =

You can look at the theme instructions at https://wphoot.com/support/metrolo/ To get support beyond the scope of documentation provided, please open a support ticket via https://wphoot.com/support/

== Changelog ==

= 1.8.0 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Remove shim for the_custom_logo
* Fix: Inline menu display css fix with mega menu plugin
* Apply filter on arguments array for the_posts_pagination
* Add help link to One Click Demo documentation
* Add support for OCDI plugin

= 1.7.8 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Removed admin_list_item_count limit
* CSS fix: last menu item dropdown
* Added missing argument for 'the_title' filter to prevent error with certain plugins
* Remove shim for the_custom_logo

= 1.7.7 =
* Internal Version. Not Released

= 1.7.6 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Added sortable capability to widgets group type

= 1.7.5 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Added support for 'inherit' value in css sanitization for dynamic css build
* Bug fix for 'box-shadow' property in css sanitization for dynamic css build
* Bug fix by unsetting selective refresh from passing into $settings array in customizer interface builder

= 1.7.4 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Added the new 'wp_body_open' function
* Improved dynamic css for ajax login form

= 1.7.3 =
* # Hybrid 4.0.0 HybridExtend 2.2.6 #
* Added Tribe 'The Events Calendar' plugin support - template fixes
* Improved logic for hoot_get_mod function

= 1.7.2 =
* # Hybrid 4.0.0 HybridExtend 2.2.5 #
* Add css support for Gutenberg gallery block
* Fix parallax image misalignment on load when lightslider is present
* Sanitize debug data for logged in admin users

= 1.7.1 =
* Internal Version. Not Released

= 1.7.0 =
* # Hybrid 4.0.0 HybridExtend 2.2.5 #
* Fix <!--default--> content for postfooter in new theme installations
* Removed older IE css support
* Fixed Color class name
* Removed minified script/style from admin
* Add support for selective refresh in customizer settings

= 1.6.6 =
* # Hybrid 4.0.0 HybridExtend 2.2.4 #
* Improved 404 handeling using default wordpress template
* 404 template update
* Fix: Frontpage section action hook passes $type instead of $key
* Fix: Jetpack lazy load exception for slider images
* Update schema links from http:// to https://
* Add helper messages to sidebars
* Use 'nav_menu_item_title' filter for menu instead of extending Walker_Nav_Menu
* Remove document title filters (not needed for new wp versions)
* Remove archive description filter (not needed for new wp versions)
* Update Wordpress to WordPress for display in enum sets
* Sortlist - add otpion for default open (custom module)

= 1.6.3 =
* # Hybrid 4.0.0 HybridExtend 2.2.3 #
* Improved frontpage template for easy modification (separate content-blog/page cases)
* Display a message in inactive sidebars instead of hiding them
* Removed deprecated attribte filters for content block image
* Added 'hybridextend_get_template_part' function
* Improved the way 'hybridextend_get_attr' handles custom classes param
* Improved headings for better SEO
* Added 'loop_meta_displayed' flag
* Escaped custom site_info (post footer content)
* Fixed google font url syntax
* Fixed review url
* Added open state to customize sortlist, added radio/radioimage option to sortlist items
* Removed $global variable for base directory path (error on some servers)
* Added limit constraint to group type in widgets
* Set default grid to max choice available for calculating image size
* Improved enum font size function
* Updated get_temrs (taxonomy) args for latest WP version in widgets admin

= 1.6.2 =
* # Hybrid 4.0.0 HybridExtend 2.2.2 #
* Minor js bug fix to work with Page Builder plugin

= 1.6.1 =
* # Hybrid 4.0.0 HybridExtend 2.2.2 #
* Use SCRIPT_DEBUG to define HYBRIDEXTEND_DEBUG
* Remove empty div containers if no slider to show (widgetized template)
* Add filters for titles in included widgets
* Add Privacy Policy page (if defined) to default Post Footer text - GDPR compliance
* Add 'hoot_searchresults_hide_pages' filter instead of global variable
* Add hook to filter google font query

= 1.6.0 =
* # Hybrid 4.0.0 HybridExtend 2.2.2 #
* Fixed 'main-content-grid' class for Frontpage Template
* Fixed CSS class for Frontpage Page Content (when set to static Page)
* Content Block Page widget - excerpt length option
* Improved implementation of Widget Margin option
* Remove Edit link from Meta information in non archive and non singular context
* Register sidebars even when not displayed (added a note message to inform users)
* Fixed: Widget color options display hexa input field
* Fixed: Widget color option in customizer screen not responsive when widget added for first time
* 'startwrap' option (css class) for customizer group types
* Load minified assets (admin) in customizer screen if available
* Improved customizer css (admin) styles
* Improved Framework constants

= 1.5.4 =
* # Hybrid 4.0.0 HybridExtend 2.2.1 #
* Removed redundant update_browser notification
* Pass type argument for lite_slider filter hook
* Allow style builder to store dynamic css as variable (for external stylesheet plugin)
* Add hooks to modify query hooks for content block widgets

= 1.5.3 =
* # Hybrid 4.0.0 HybridExtend 2.2.1 #
* Added backward compatibility for font icons for plugins using older version (missing font names)

= 1.5.1 =
* # Hybrid 4.0.0 HybridExtend 2.2.1 #
* Updated Font Awesome Version for Enqueue

= 1.5.0 =
* # Hybrid 4.0.0 HybridExtend 2.2.1 #
* Updated Font Awesome Library 5.0.10
* CSS fix for Comment Respond Form checkboxes
* Updated woocommerce template (archive-product) to v3.4.0
* Removed redundant Customizer Premium upsell code
* Jetpack Infinite Scroll fix

= 1.4.5 =
* # Hybrid 4.0.0 HybridExtend 2.2.0 #
* Add 'current' status to individual slides during render
* Hide empty entry-byline block when nothing to show
* Allow social profile enum to skip skype and email when not needed
* Fix link and link hover color css for footer

= 1.4.4 =
* # Hybrid 4.0.0 HybridExtend 2.2.0 #
* Fixed menu hover z-index css
* Remove override mod value filter from hoot_get_mod function
* Add tagline display option for image logo
* Update sanitization filter for values returned using hoot_get_mod function

= 1.4.1 =
* # Hybrid 4.0.0 HybridExtend 2.2.0 #
* Prefixed filter names in various files
* Fix: font awesome version number for enqueue
* Fix: Customizer CSS for latest WP version

= 1.4.0 =
* # Hybrid 4.0.0 HybridExtend 2.2.0 #
* Updated Hybrid framework to latest version
* Woocommerce hooks triggered using 'wp' action hook
* Fix: Widget user defined margins set to 0
* Loop pretitle encapsulated in span for css styling
* Fix: Custom logo with icon and custom size empty
* Fixed attribute filters priority
* Added opacity control and sanitization for colors (code only)

= 1.3.6 =
* # Hybrid 3.0.0 HybridExtend 2.1.14 #
* Content Block widgets - Add option for no content/excerpt
* Loop meta - Add context for attributes (update attributes accordingly)
* Dynamic Icon alignment for Custom Logo Lines

= 1.3.5 =
* # Hybrid 3.0.0 HybridExtend 2.1.14 #
* Apply 'the_excerpt' filter to hybridextend_get_excerpt
* Widgets - Fix standard value bug for collapse, group and checkbox

= 1.3.4 =
* # Hybrid 3.0.0 HybridExtend 2.1.13 #
* Add arguments to action hooks in content block widgets
* Fix: Conditional tag for meta info on static page set as frontpage
* Fix: Hide background button for Slider modules in Customizer
* Pass widget values to global variable (including widget id)
* Fix: z-order for flygroup and flyicon windows in Customizer

= 1.3.3 =
* # Hybrid 3.0.0 HybridExtend 2.1.13 #
* Load dynamic styles (theme/woocommerce) before child theme stylesheet
* Fix: Wiget Module Accent background
* Added extra parameters to image size filter for content block (pages/posts) widgets
* Slider module background option
* Added support for vk.com social site

= 1.3.1 =
* # Hybrid 3.0.0 HybridExtend 2.1.13 #
* Hide meta info display container when nothing to show

= 1.3.0 =
* # Hybrid 3.0.0 HybridExtend 2.1.13 #
* Content Blocks Post widget: Add offset and custom excerpt length options
* Widgets css options: Display Widget ID
* Use div instead of h1 for site logo on non front pages

= 1.2.3 =
* # Hybrid 3.0.0 HybridExtend 2.1.12 #
* CSS: Added Elementor plugin compatibility
* CSS: Prefix grid and column classes

= 1.2.2 =
* # Hybrid 3.0.0 HybridExtend 2.1.11 #
* Remove 'array_replace_recursive' from edit functions (customizer class) for PHP<5.3 compatibility
* Add 'get_search_query' to search form
* Updated hook names to use hoot prefix
* Multiple data sanitization
* Add 'Content Block (Posts)' widget
* Add custom css option to hoot widgets
* Add minified files for all admin js/css
* Remove global $post mod (for pricetable plugin - wpalchemy)

= 1.2.1 =
* # Hybrid 3.0.0 HybridExtend 2.1.10 #
* Fix: Dont enqueue google font style if no google font selected
* Fix: Use relative path to find upload attachment id from url - fix when images have same name in different folders
* Fix: Wordpress admin bar position for logged in users on mobile
* Fix: Missing strings from .pot file (added functions like esc_html__ etc)

= 1.2.0 =
* # Hybrid 3.0.0 HybridExtend 2.1.9 #
* Dont enqueue google font style if no google font selected
* Read More and Excerpt length do not affect admin style
* Post pagination appears in archive view
* Fixed namespace for 'frontpage_slider' filter
* Updated Font Awesome library

= 1.1.10 =
* # Hybrid 3.0.0 HybridExtend 2.1.8 #
* Add support for new woocommerce product display slider (and zoom)
* Bug Fix: Slider images code for older PHP versions (intval inside empty function)

= 1.1.9 =
* # Hybrid 3.0.0 HybridExtend 2.1.8 #
* Bug Fix: Display slider images (find upload attachment id) when image domain is different (example: cdn)

= 1.1.8 =
* # Hybrid 3.0.0 HybridExtend 2.1.8 #
* Bug Fix: Content block bug fix from previous version

= 1.1.7 =
* # Hybrid 3.0.0 HybridExtend 2.1.8 #
* Add actions to content box widgets
* Woocommerce Fix: Clear floats for related and upsell
* Archive pages - Link images to post
* Sliders - Use attachment id to display images (alt tags shown)
* Content Block - Change query structure to make it polylang compatible

= 1.1.6 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Fix minified stylesheet for '>'
* Added span class to loop title suffix

= 1.1.5 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Typography customizer control - css fix for firefox
* Custom images added at priority 0 instead of 5 ('init' hook) to work with 'Simple Image Sizes' plugin (hooked to 'init' at priority 1 and 2)
* Mobile Menu - Option for dropdown and left slide menu

= 1.1.4 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Added version number to woocommerce templates (needed for WC compatibility)
* Multiple Fixes

= 1.1.3 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Multiple Fixes

= 1.1.2 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Changed hoot class to hoothide in admin to prevent plugin clashes

= 1.1.1 =
* # Hybrid 3.0.0 HybridExtend 2.1.7 #
* Multiple fixes
* HTML Slider (Lite) uses Page content (similar BST version)
* Content block widget uses Page content (similar BST version)

= 1.1.0 =
* # Hybrid 3.0.0 HybridExtend 2.1.6 #

= 1.0.3 =
* # Hybrid 3.0.0 HybridExtend 2.1.5 #
* Initial release.

== Upgrade Notice ==

= 1.7.0 =
* This is the officially supported stable release version. Please update to this version before opening a support ticket.

== Resources ==

= This Theme has code derived/modified from the following resources all of which, like WordPress, are distributed under the terms of the GNU GPL =

* Underscores WordPress Theme, Copyright 2012 Automattic http://underscores.me/
* Hybrid Core Framework v3.0.0, Copyright 2008 - 2015, Justin Tadlock  http://themehybrid.com/
* Hybrid Base WordPress Theme v1.0.0, Copyright 2013 - 2015, Justin Tadlock  http://themehybrid.com/
* Customizer Library v1.3.0, Copyright 2010 WP Theming http://wptheming.com

= This theme bundles the following third-party resources =

* FitVids http://fitvidsjs.com/ Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com : WTFPL license http://sam.zoy.org/wtfpl/
* Modernizr http://modernizr.com/ Copyright 2009—2014 : MIT License
* lightSlider http://sachinchoolur.github.io/lightslider/ Copyright sachi77n@gmail.com : MIT License
* Superfish https://github.com/joeldbirch/superfish/ Copyright Joel Birch : MIT License
* Font Awesome http://fontawesome.io/ Copyright (c) 2015, Dave Gandy : SIL OFL 1.1 (Font) MIT License (Code)
* TRT Customizer Pro https://github.com/justintadlock/trt-customizer-pro Copyright 2016 Justin Tadlock : GNU GPL Version 2
* Parallax http://pixelcog.com/parallax.js/ Copyright 2016 PixelCog Inc. : MIT License

= This theme screenshot contains the following images =

* Image: Minimal Desk Minimalist Room https://www.pexels.com/photo/24324/ : CC0
* Image: Table White Home Interior https://www.pexels.com/photo/6412/ : CC0
* Image: Top view of houseplants on white background https://www.pexels.com/photo/6370/ : CC0
* Image: Still Life Bottles Nostalgia https://pixabay.com/en/still-life-bottles-nostalgia-646622/ : CC0

= Bundled Images: The theme bundles patterns =

* Background Patterns, Copyright 2015, wpHoot : CC0

= Bundled Images: The theme bundles composite images in /include/admin/images using the following resources =

* Misc UI Grpahics, Copyright 2015, wpHoot : CC0
* Image: Pencil https://pixabay.com/photo-2782840/ : CC0
* Image: Color Wheel https://pixabay.com/photo-455365/ : CC0
* Image: Milk Splash https://pixabay.com/photo-2064088/ : CC0
* Image: Raspberry https://pixabay.com/photo-2023404/ : CC0
* Image: Beverage https://pixabay.com/photo-3157395/ : CC0
* Image: Season https://pixabay.com/photo-1985856/ : CC0
* Image: Avatar https://pixabay.com/photo-2155431/ : CC0
* Image: Avatar https://pixabay.com/photo-2191931/ : CC0
* Image: People https://pixabay.com/photo-3245739/ : CC0