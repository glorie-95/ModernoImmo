	
		</div> <!-- end header div 3 -->
	</div> <!-- end header div 2 -->
</div> <!-- end header div 1 -->

<?php
if( get_the_ID() )
{
	if( get_post_meta( get_the_id(), 'seopress_hide_footer_widgets', true ) != 1 )
	{
		get_template_part( 'template-parts/footer', 'widgets' );
	}
}
else
{
	get_template_part( 'template-parts/footer', 'widgets' );
}
?>

<?php get_template_part( 'template-parts/footer', 'copyright' ); ?>

<?php get_template_part( 'template-parts/footer', 'backtotop' ); ?>

<?php wp_footer(); ?>
</body>
</html>