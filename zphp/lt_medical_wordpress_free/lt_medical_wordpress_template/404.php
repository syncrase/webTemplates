<?php
/**
 * 404 Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */

@header( 'HTTP/1.1 404 Not found', true, 404 );
 
get_header(); // Loads the header.php template. ?>

<?php do_atomic( 'before_content' ); // before_content ?>

	<div id="content">
	
	<?php do_atomic( 'open_content' ); // open_content ?>
			
		<div class="hfeed">

			<div id="post-0" class="<?php hybrid_entry_class(); ?>">
			
			<h1 class="error-404-title entry-title"><?php _e( 'What happened!?', 'ltheme' ); ?></h1>

				<div class="entry-content">
				
					<p>
						<?php printf( __( "You tried going to %s, which doesn't exist. You can try navigate or search.", 'ltheme' ), '<code>' . home_url( esc_url( $_SERVER['REQUEST_URI'] ) ) . '</code>' ); ?>
					</p>
			
					<?php get_search_form(); // Loads the searchform.php template. ?>
			
				</div><!-- .entry-content -->

			</div><!-- .hentry -->

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // close_content ?>

	</div><!-- #content -->
			
	<?php do_atomic( 'after_content' ); // after_content ?>
		
<?php get_footer(); // Loads the footer.php template. ?>