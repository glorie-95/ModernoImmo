<?php
/**
 * Class to add meta box for page.
 *
 */

// Do if is admin only.
if( is_admin() )
{
    add_action( 'load-post.php', 'seopress_page_meta_box_first_func' );
    add_action( 'load-post-new.php', 'seopress_page_meta_box_first_func' );
}

/**
 * Calls the class on the post edit screen.
 */
function seopress_page_meta_box_first_func()
{
    new SEOPress_Page_Meta_Box_Main_Class();
}
 
/**
 * The Class.
 */
class SEOPress_Page_Meta_Box_Main_Class
{
 
    /**
     * Hook into the appropriate actions when the class is constructed.
     */
    public function __construct()
    {
        add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
        add_action( 'save_post',      array( $this, 'save' ) );
    }
 
    /**
     * Adds the meta box container.
     */
    public function add_meta_box( $post_type )
    {
        if ( $post_type == 'page' )
        {
            add_meta_box(
                'seopress_page_meta_box_cntnr',
                __( 'SEOPress Options for this Page', 'seopress' ),
                array( $this, 'render_meta_box_content' ),
                $post_type,
                'normal',
                'default'
            );
        }
    }

     /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content( $post )
    {
        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'seopress_page_meta_bx_key', 'seopress_page_meta_bx_key_nonce' );
 
        // Use get_post_meta to retrieve an existing value from the database.
        $slider_scode 			= get_post_meta( $post->ID, 'seopress_slider_scode', true );
        $hide_title 			= get_post_meta( $post->ID, 'seopress_hide_title', true );
        $hide_footer_widgets 	= get_post_meta( $post->ID, 'seopress_hide_footer_widgets', true );
        $show_breadcrumb 		= get_post_meta( $post->ID, 'seopress_show_breadcrumb', true );

        ?>


        <p>
        <label style="padding-right: 75px;" for="slider_scode">
            <?php _e( 'Slider Shortcode : ', 'seopress' ); ?>
        </label>
        <input type="text" id="slider_scode" name="slider_scode_val" value="<?php echo htmlspecialchars( wp_kses_post( $slider_scode ) ); ?>" /> <?php _e( 'Info: Use any slider plugin to create slider and copy slider shortcode.', 'seopress' ); ?>
        </p>

        <p>
        <label style="padding-right: 17px;" for="hide_title">
            <?php _e( 'Want to hide Headline/Title? ', 'seopress' ); ?>
        </label>
        <input type="checkbox" id="hide_title" name="hide_title_val"  <?php checked( $hide_title, '1' ); ?> /> <?php _e( 'Info: This will hide page title above content.', 'seopress' ); ?>
        </p>

        <p>
        <label style="padding-right: 7px;" for="hide_footer_widgets">
            <?php _e( 'Want to hide Footer Widgets? ', 'seopress' ); ?>
        </label>
        <input type="checkbox" id="hide_footer_widgets" name="hide_footer_widgets_val" <?php checked( $hide_footer_widgets, '1' ); ?> /> <?php _e( 'Info: This will hide footer widget section, if you are using footer widget.', 'seopress' ); ?>
        </p>

        <p>
        <label style="padding-right: 21px;" for="show_breadcrumb">
            <?php _e( 'Want to show Breadcrumb? ', 'seopress' ); ?>
        </label>
        <input type="checkbox" id="show_breadcrumb" name="show_breadcrumb_val" <?php checked( $show_breadcrumb, '1' ); ?> /> <?php _e( 'Info: This will display breadcrumb on this page.', 'seopress' ); ?>
        </p>

        <?php
    }
 
    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save( $post_id )
    {
        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */
 
        // Check if our nonce is set.
        if( ! isset( $_POST['seopress_page_meta_bx_key_nonce'] ) )
        {
            return $post_id;
        }
 
        $nonce = wp_unslash( $_POST['seopress_page_meta_bx_key_nonce'] );
 
        // Verify that the nonce is valid.
        if( ! wp_verify_nonce( $nonce, 'seopress_page_meta_bx_key' ) )
        {
            return $post_id;
        }
 
        /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        {
            return $post_id;
        }
 
        // Check the post type.
        if( $_POST['post_type'] != 'page' )
        {
        	return $post_id;
        }

        // Check current user permission.
        if( ! current_user_can( 'edit_page', $post_id ) )
        {
            return $post_id;
        }
 
        /* OK, it's safe for us to save the data now. */

        /*
        * Do not store slider shortcode by default otherwise it will consume database space.
        * Also delete shortcode meta if now it is blank and used before. 
        */
        // Proceed if set slider_scode_val.
        if( isset( $_POST['slider_scode_val'] ) )
        {
        	// delete stored meta if stored and now it is blank
        	if( empty( $_POST['slider_scode_val'] ) )
        	{
        		// Delete meta if there is
        		if( get_post_meta( $post_id, 'seopress_slider_scode', true ) )
        		{
        			delete_post_meta( $post_id, 'seopress_slider_scode' );
        		}
        	}
        	else
        	{
        		$slider_scode = sanitize_text_field( $_POST['slider_scode_val'] );
        		update_post_meta( $post_id, 'seopress_slider_scode', $slider_scode );
        	}
        }

        // Store 0 or 1 for title.
        $hide_title = ( isset( $_POST['hide_title_val'] ) && 'on' === $_POST['hide_title_val'] ) ? '1' : '0';
        update_post_meta( $post_id, 'seopress_hide_title', $hide_title );

        // Store 0 or 1 for footer_widgets.
        $hide_title = ( isset( $_POST['hide_footer_widgets_val'] ) && 'on' === $_POST['hide_footer_widgets_val'] ) ? '1' : '0';
        update_post_meta( $post_id, 'seopress_hide_footer_widgets', $hide_title );

        // Store 0 or 1 for breadcrumb.
        $hide_title = ( isset( $_POST['show_breadcrumb_val'] ) && 'on' === $_POST['show_breadcrumb_val'] ) ? '1' : '0';
        update_post_meta( $post_id, 'seopress_show_breadcrumb', $hide_title );

    }

}
