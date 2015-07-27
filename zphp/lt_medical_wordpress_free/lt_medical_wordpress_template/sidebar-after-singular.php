<?php
/**
 * After Singular Sidebar Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */

if ( is_active_sidebar( 'after-singular' ) ) : ?>

	<div id="sidebar-after-singular" class="sidebar">

		<?php dynamic_sidebar( 'after-singular' ); ?>

	</div><!-- #sidebar-after-singular -->

<?php endif; ?>