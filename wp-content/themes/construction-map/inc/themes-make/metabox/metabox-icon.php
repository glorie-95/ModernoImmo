<?php
if( !class_exists( 'Construction_Map_Font_Awesome_Class_Metabox') ){
    class Construction_Map_Font_Awesome_Class_Metabox {

        public function __construct()
        {

            add_action( 'add_meta_boxes', array( $this, 'construction_map_icon_metabox') );

            add_action( 'save_post', array( $this, 'construction_map_save_icon_value') );
        }


        public function construction_map_icon_metabox()
        {

            add_meta_box(
                'construction_map_icon',
                esc_html__('Font Awesome class', 'construction-map'),
                array(
                    $this, 'construction_map_generate_icon'),
                'post',
                'side',
                'high'
            );
            add_meta_box(
                'construction_map_icon',
                esc_html__('Font Awesome class', 'construction-map'),
                array(
                    $this, 'construction_map_generate_icon'),
                'page',
                'side',
                'high'
            );
        }

        public function construction_map_generate_icon($post)
        {
            $values = get_post_meta( $post->ID, 'construction_map_icon', true );
            wp_nonce_field( basename(__FILE__), 'construction_map_fontawesome_fields_nonce');
            ?>
            <input type="text" name="icon" value="<?php echo esc_html($values) ?>" />
            <small>
                <?php

                /* translators: '%1$s: br and link start, %1$s: %2$s for link end, %3$s code start, %4$s  code end*/

                printf( __( '%1$sRefer here%2$s for icon class. For example: %3$sfa-desktop%4$s', 'construction-map' ),
              '<br /><a href="'.esc_url( 'http://fontawesome.io/cheatsheet/' ).'" target="_blank">','</a>',"<code>","
              </code>");
                ?>
            </small>
            <?php
        }

        public function construction_map_save_icon_value($post_id)
        {

            /*
                * A Guide to Writing Secure Themes – Part 4: Securing Post Meta
                *https://make.wordpress.org/themes/2015/06/09/a-guide-to-writing-secure-themes-part-4-securing-post-meta/
                * */
            if (
                !isset($_POST['construction_map_fontawesome_fields_nonce']) ||
                !wp_verify_nonce($_POST['construction_map_fontawesome_fields_nonce'], basename(__FILE__)) || /*Protecting against unwanted requests*/
                (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || /*Dealing with autosaves*/
                !current_user_can('edit_post', $post_id)/*Verifying access rights*/
            ) {
                return;
            }

            //Execute this saving function
            if (isset($_POST['icon']) && !empty($_POST['icon'])) {
                $fontawesomeclass = sanitize_text_field( $_POST['icon'] );
                update_post_meta($post_id, 'construction_map_icon', $fontawesomeclass);
            }
        }
    }
}
$productsMetabox = new construction_map_Font_awesome_Class_Metabox;



