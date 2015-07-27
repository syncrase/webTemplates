<?php
/**
 * Content Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
do_atomic('before_entry'); // before_entry 
?>

<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

    <?php do_atomic('open_entry'); // open_entry ?>

    <?php if (is_front_page() && !is_home()) { ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<p class="page-links">' . __('Pages:', 'ltheme'), 'after' => '</p>')); ?>
        </div><!-- .entry-content -->

    <?php } elseif (is_singular()) { ?>

        <article>
            <div class="itemView">
                <div class="itemBody">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="itemImageBlock">
                            <span class="itemImage">
                                <?php if (current_theme_supports('get-the-image')) get_the_image(array('meta_key' => 'Thumbnail', 'size' => 'large')); ?>
                            </span>
                            <div class = "clear"></div>
                        </div>
                        <div class = "itemHeader">
                            <div class = "blogDate pull-left">
                                <?php echo apply_atomic_shortcode('byline', '[entry-published format="d" class="sp_date_day"]'); ?>
                                <?php echo apply_atomic_shortcode('byline', '[entry-published format="M" class="sp_month"]'); ?>
                            </div>
                            <div class="BlogHeaderInfo">
                                <?php echo apply_atomic_shortcode('entry_title', '[entry-title]'); ?>
                                <?php echo apply_atomic_shortcode('byline', '<div class="byline">' . __('Written by [entry-author] [entry-terms taxonomy="category" before=" | Published in "] [entry-terms before="| Tagged under "]', 'ltheme') . '</div>'); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php } else { ?>
                        <div class = "itemHeader">
                            <div class="titleHeaderInfo">
                                <?php echo apply_atomic_shortcode('entry_title', '[entry-title]'); ?>
                                <?php if (!is_page()) { ?>
                                    <?php echo apply_atomic_shortcode('byline', '<div class="byline">' . __('Written by [entry-author] [entry-terms taxonomy="category" before=" | Published in "] [entry-terms before="| Tagged under "]', 'ltheme') . '</div>'); ?>
                                <?php } ?>    
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php } ?>
                    <div class="itemIntroText">
                        <?php the_content(); ?>
                        <?php wp_link_pages(array('before' => '<p class="page-links">' . __('Pages:', 'ltheme'), 'after' => '</p>')); ?>
                    </div>
                </div>
            </div>
        </article>


    <?php } else { ?>

        <article>
            <div class="itemView">
                <div class="itemBody">
                    <div class="col-sm-5">
                        <div class="itemImageBlock">

                            <?php if (has_post_thumbnail()) { ?>
                                <span class="itemImage">
                                    <?php if (current_theme_supports('get-the-image')) get_the_image(array('meta_key' => 'Thumbnail', 'size' => 'large')); ?>
                                </span>
                            <?php } else { ?>
                                <span class="itemImage">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="/images/thumbnail-default.jpg">
                                    </a>
                                </span>
                            <?php } ?>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="itemHeader">
                            <div class="blogHeaderInfo">
                                <?php echo apply_atomic_shortcode('entry_title', '[entry-title]'); ?>
                                <?php echo apply_atomic_shortcode('byline', '<div class="byline">' . __('Written by [entry-author] [entry-terms taxonomy="category" before=" | Published in "] [entry-terms before="| Tagged under "]', 'ltheme') . '</div>'); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="itemIntroText">
                            <?php the_excerpt(); ?>
                            <?php wp_link_pages(array('before' => '<p class="page-links">' . __('Pages:', 'ltheme'), 'after' => '</p>')); ?>
                        </div>
                        <div class="itemReadMore">
                            <a class="btn-read-more" href="<?php the_permalink(); ?>" title="Read More">Read More</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </article>

    <?php } ?>

    <?php do_atomic('close_entry'); // close_entry  ?>

    <div class="clear"></div>

</div><!-- .hentry -->

<?php
do_atomic('after_entry'); // after_entry ?>