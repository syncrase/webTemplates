<?php
/**
 * Primary Sidebar Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */

if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_primary' ); // before_sidebar_primary ?>

	<div id="sidebar-primary" class="sidebar">

		<?php do_atomic( 'open_sidebar_primary' ); // open_sidebar_primary ?>

		<?php dynamic_sidebar( 'primary' ); ?>

		<?php do_atomic( 'close_sidebar_primary' ); // close_sidebar_primary ?>
	
	</div><!-- #sidebar-primary -->

	<?php do_atomic( 'after_sidebar_primary' ); // after_sidebar_primary ?>

<?php endif; ?>