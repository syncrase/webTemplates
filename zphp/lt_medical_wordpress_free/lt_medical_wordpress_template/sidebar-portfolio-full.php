<?php
/**
 * Sidebar Portfolio Full Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (is_active_sidebar('portfolio-full')) :
    ?>

    <div id="sidebar-portfolio-full" class="sidebar">

        <div class="container-fluid">

            <div class="row">

                <?php dynamic_sidebar('portfolio-full'); ?>

            </div>

        </div>

    </div><!-- #sidebar-portfolio-full -->

<?php endif; ?>