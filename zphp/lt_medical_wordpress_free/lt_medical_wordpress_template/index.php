<?php
/**
 * Index Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
?>
<?php get_header(); // Loads the header.php template.        ?>

<?php if (!is_home() && !is_front_page()) { ?>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <?php
                if (current_theme_supports('breadcrumb-trail')) {
                    breadcrumb_trail(array('container' => 'nav', 'labels' => array('browse' => __('', 'ltheme')), 'separator' => __('&#8764;', 'ltheme')));
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>

<div id="main">

    <div class="container">

        <div class="row">

            <?php do_atomic('open_main'); // open_main ?>

            <?php do_atomic('before_content'); // before_content ?>

            <div class="col-lg-9 col-sm-8 col-xs-12">

                <?php do_atomic('open_content'); // open_content ?>

                <div class="hfeed">

                    <?php get_template_part('loop-meta'); // Loads the loop-meta.php template. ?>

                    <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('content', ( post_type_supports(get_post_type(), 'post-formats') ? get_post_format() : get_post_type())); ?>

                            <?php if (!is_home() && !is_front_page()) { ?>

                                <?php get_sidebar('after-singular'); // Loads the sidebar-after-singular.php template. ?>

                                <?php do_atomic('after_singular'); // after_singular ?>

                                <?php comments_template('/comments.php', true); // Loads the comments.php template. ?>

                            <?php } else { ?>

                                <?php get_sidebar('portfolio'); // Loads the sidebar-portfolio.php template. ?>

                                <?php do_atomic('portfolio'); // portfolio ?>

                                <?php get_sidebar('portfolio-full'); // Loads the sidebar-portfolio-full.php template. ?> 

                                <?php do_atomic('portfolio_full'); // portfolio-full ?>

                            <?php } ?>

                        <?php endwhile; ?>

                    <?php else : ?>

                        <?php get_template_part('loop-error'); // Loads the loop-error.php template. ?>

                    <?php endif; ?>

                </div><!-- .hfeed -->

                <?php do_atomic('close_content'); // close_content ?>

                <?php get_template_part('loop-nav'); // Loads the loop-nav.php template. ?>

            </div>

            <?php do_atomic('after_content'); // after_content ?>

            <div class="col-lg-3 col-sm-4 col-xs-12">

                <?php get_sidebar('primary'); // Loads the sidebar-primary.php template. ?>

            </div>

            <?php do_atomic('close_main'); // close_main ?>

        </div><!--row-->

    </div><!-- .container -->

</div><!-- #main -->

<?php
get_footer(); // Loads the footer.php template. ?>