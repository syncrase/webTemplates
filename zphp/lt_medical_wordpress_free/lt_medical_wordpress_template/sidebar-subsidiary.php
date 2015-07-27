<?php
/**
 * Subsidiary Sidebar Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */

if ( is_active_sidebar( 'subsidiary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_subsidiary' ); // before_sidebar_subsidiary ?>

		<div id="sidebar-subsidiary" class="sidebar">
		
			<div class="container">

				<?php do_atomic( 'open_sidebar_subsidiary' ); // open_sidebar_subsidiary ?>

				<?php dynamic_sidebar( 'subsidiary' ); ?>

				<?php do_atomic( 'close_sidebar_subsidiary' ); // close_sidebar_subsidiary ?>
				
			</div><!-- .wrap -->

		</div><!-- #sidebar-subsidiary .aside -->
		
	<?php do_atomic( 'after_sidebar_subsidiary' ); // after_sidebar_subsidiary ?>

<?php endif; ?>