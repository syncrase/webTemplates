<?php
/**
 * Right Sidebar Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (is_active_sidebar('right-sidebar')) :
    ?>

    <div id="sidebar-right-sidebar" class="sidebar">

        <?php do_atomic('open_sidebar_right_sidebar'); // open_sidebar_right_sidebar ?>

        <?php dynamic_sidebar('right-sidebar'); ?>

        <?php do_atomic('close_sidebar_right_sidebar'); // close_sidebar_right_sidebar ?>

    </div><!-- #sidebar-right-sidebar -->

<?php endif; ?>