<?php
/**
 * Header Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php hybrid_document_title(); ?></title>

        <!-- Mobile viewport optimized -->
        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); // wp_head ?>

    </head>

    <body class="<?php hybrid_body_class(); ?>">

        <?php do_atomic('open_body'); // open_body ?>

        <div id="body-innerwrapper">

            <header class="menu-wrapper">

                <div class="container">

                    <div class="row">

                        <div id="logo" class="col-sm-3">

                            <?php get_sidebar('logo'); // Loads the sidebar-logo.php template. ?>

                            <?php do_atomic('logo'); // logo ?>

                        </div>

                        <div class="menu col-sm-7">

                            <?php get_template_part('menu', 'primary'); // Loads the menu-primary.php template. ?>

                            <?php do_atomic('before_main'); // before_main ?>

                        </div>

                        <div class="preset col-sm-2">

                        </div>

                    </div>

                </div><!-- .container -->

            </header>