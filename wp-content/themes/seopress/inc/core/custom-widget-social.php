<?php

class seopress_social_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'seopress_social_widget',
			'description' => __( 'Display social profile. Social link will be fetch from customize.', 'seopress' ),
		);
		parent::__construct( 'seopress_social_widget', __( 'SEOPress Social Profile', 'seopress' ), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance )
	{
		// outputs the content of the widget

		$title = empty( $instance['title'] ) ? '' : $instance['title'];
		$stab = empty( $instance['stab'] ) ? 'snewtab' : $instance['stab'];

		if( $stab == 'snewtab' )
		{
			$tabtarget = 'target="_blank"';
		}
		else
		{
			$tabtarget = '';
		}

		echo $args['before_widget'];

		if( ! empty( $title ) )
		{
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		?>
		<div class="textwidget">
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_facebook', 'http://facebook.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Facebook', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_twitter', 'http://twitter.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Twitter', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_youtube', 'http://youtube.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'YouTube', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube social_profile-icon-clr"></span></a>
				<?php
			}
			?>

			<?php
			if( get_theme_mod( 'seopress_social_profile_link_vk' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'VK', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_vk' ) ); ?>"><span class="fa fa-vk social_profile-icon-clr"></span></a>
			<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_okru' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Ok.ru', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_okru' ) ); ?>"><span class="fa fa-odnoklassniki social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_linkedin' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Linkedin', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_pinterest' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Pinterest', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p social_profile-icon-clr"></span></a>
				<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_instagram' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Instagram', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_instagram' ) ); ?>"><span class="fa fa-instagram social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_telegram' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Telegram', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_telegram' ) ); ?>"><span class="fa fa-telegram social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_snapchat' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Snapchat', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_snapchat' ) ); ?>"><span class="fa fa-snapchat social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_flickr' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Flickr', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_flickr' ) ); ?>"><span class="fa fa-flickr social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_reddit' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Reddit', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_reddit' ) ); ?>"><span class="fa fa-reddit social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_tumblr' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Tumblr', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_tumblr' ) ); ?>"><span class="fa fa-tumblr social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_yelp' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Yelp', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_yelp' ) ); ?>"><span class="fa fa-yelp social_profile-icon-clr"></span></a>
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'sprofile_link_whatsappno' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'WhatsApp', 'seopress' ); ?>" <?php echo $tabtarget; ?> href="whatsapp://send?text=Hi&phone=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>&abid=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>"><span class="fa fa-whatsapp social_profile-icon-clr"></span></a>
			<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'seopress_social_profile_link_skype' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Skype', 'seopress' ); ?>" href="skype:<?php echo esc_attr( get_theme_mod( 'seopress_social_profile_link_skype' ) ); ?>?add"><span class="fa fa-skype social_profile-icon-clr"></span></a>
			<?php
			}
			?>
			
			
		</div>
		<?php
		
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance )
	{
		// outputs the options form on admin
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$tabtarget = ! empty( $instance['stab'] ) ? $instance['stab'] : 'snewtab';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'seopress' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'stab' ) ); ?>"><?php esc_attr_e( 'Open links in:', 'seopress' ); ?></label> 
		<select id="<?php echo esc_attr( $this->get_field_id( 'stab' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'stab' ) ); ?>">
			<option value="snewtab" <?php selected( $tabtarget, 'snewtab' ); ?> ><?php esc_attr_e( 'New Tab', 'seopress' ); ?></option>
			<option value="ssametab" <?php selected( $tabtarget, 'ssametab' ); ?> ><?php esc_attr_e( 'Same Tab', 'seopress' ); ?></option>
		</select>
		</p>
		<?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance )
	{
		// processes widget options to be saved
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['stab'] = sanitize_text_field( $new_instance['stab'] );
		return $instance;
	}
}


// register Foo_Widget widget
function seopress_register_social_widget()
{
	register_widget( 'seopress_social_widget' );
}
add_action( 'widgets_init', 'seopress_register_social_widget' );