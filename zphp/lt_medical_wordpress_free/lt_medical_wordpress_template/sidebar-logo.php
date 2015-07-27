<?php
/**
 * Sidebar Logo Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */

if ( is_active_sidebar( 'logo' ) ) : ?>

	<div id="sidebar-logo" class="sidebar">

		<?php dynamic_sidebar( 'logo' ); ?>

	</div><!-- #sidebar-logo -->

<?php endif; ?>