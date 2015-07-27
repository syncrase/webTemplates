<?php
/**
 * Primary Menu Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
if (has_nav_menu('primary')) :
    ?>

    <?php do_atomic('before_menu_primary'); // before_menu_primary ?>

    <nav id="menu-primary" class="navbar navbar-default" role="navigation">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php do_atomic('open_menu_primary'); // open_menu_primary ?>	

            <?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse','container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'menu_id' => '', 'fallback_cb' => '')); ?>

            <?php do_atomic('close_menu_primary'); // close_menu_primary ?>
        </div><!-- .row -->
    </nav><!-- #menu-primary -->

    <?php do_atomic('after_menu_primary'); // after_menu_primary ?>

<?php endif; ?>