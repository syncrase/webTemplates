<?php
/**
 * Sidebar Blog Default Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (is_active_sidebar('blog')) :
    ?>

    <div id="sidebar-blog" class="sidebar">

        <div class="container">

            <div class="row">
                <?php dynamic_sidebar('blog'); ?>

            </div>

        </div>

    </div><!-- #sidebar-blog -->

<?php endif; ?>