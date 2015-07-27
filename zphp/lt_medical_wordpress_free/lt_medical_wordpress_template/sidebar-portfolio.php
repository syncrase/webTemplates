<?php
/**
 * Sidebar Portfolio Default Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (is_active_sidebar('portfolio')) :
    ?>

    <div id="sidebar-portfolio" class="sidebar">

        <div class="container">

            <div class="row">
                <?php dynamic_sidebar('portfolio'); ?>

            </div>

        </div>

    </div><!-- #sidebar-portfolio -->

<?php endif; ?>