<?php
/*
  Template Name: Blog Listing
 */

get_header(); ?>
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

<div id="main-body-blog-listing">

    <div class="container">

        <div class="row">

            <div class="col-lg-9 col-sm-8 col-xs-12 pull-left">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'post_type' => 'post');
                $postslist = new WP_Query($args);

                if ($postslist->have_posts()) :
                    while ($postslist->have_posts()) : $postslist->the_post();

                        get_template_part('content-blog', ( post_type_supports(get_post_type(), 'post-formats') ? get_post_format() : get_post_type()));

                    endwhile;

                    next_posts_link('Older Blog', $postslist->max_num_pages);
                    previous_posts_link('Next Blog &raquo;');
                    wp_reset_postdata();
                endif;
                ?>

            </div>
            <div class="col-lg-3 col-sm-4 col-xs-12 pull-right">

                <?php do_atomic('after_content'); // after_content  ?>

                <?php get_sidebar('primary'); // Loads the sidebar-primary.php template.  ?>

                <?php do_atomic('close_main'); // close_main   ?>

            </div>
        </div><!--row-->

    </div><!-- .container -->

</div><!-- #main -->
<?php get_footer(); ?>