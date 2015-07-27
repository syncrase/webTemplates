<?php
/*
  Template Name: Content
 */

get_header();
?>

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

<div id="main">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <?php do_atomic('open_content'); // open_content ?>

                <div class="hfeed">

                    <?php get_template_part('loop-meta'); // Loads the loop-meta.php template. ?>

                    <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('content', ( post_type_supports(get_post_type(), 'post-formats') ? get_post_format() : get_post_type())); ?>

                            <?php get_sidebar('after-singular'); // Loads the sidebar-after-singular.php template. ?>

                            <?php do_atomic('after_singular'); // after_singular ?>

                            <?php comments_template('/comments.php', true); // Loads the comments.php template. ?>

                        <?php endwhile; ?>

                    <?php else : ?>

                        <?php get_template_part('loop-error'); // Loads the loop-error.php template. ?>

                    <?php endif; ?>

                </div><!-- .hfeed -->

                <?php do_atomic('close_content'); // close_content ?>

                <?php get_template_part('loop-nav'); // Loads the loop-nav.php template. ?>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>