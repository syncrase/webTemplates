<?php
/**
 * Left Sidebar Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (is_active_sidebar('left-sidebar')) :
    ?>

    <div id="sidebar-left-sidebar" class="sidebar">

        <?php do_atomic('open_sidebar_left_sidebar'); // open_sidebar_left_sidebar ?>

        <?php dynamic_sidebar('left-sidebar'); ?>

        <?php do_atomic('close_sidebar_left_sidebar'); // close_sidebar_left_sidebar ?>

    </div><!-- #sidebar-left-sidebar -->

<?php endif; ?>