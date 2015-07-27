<?php
/**
 * Content Blog Template
 *
 * @package L.THEME
 * @subpackage Template
 * @since 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
    <article>
        <div class="itemView">
            <div class="itemBody">
                <div class="itemImageBlock">
                    <?php if (has_post_thumbnail()) { ?>
                        <span class="itemImage">
                            <?php if (current_theme_supports('get-the-image')) get_the_image(array('meta_key' => 'Thumbnail', 'size' => 'large')); ?>
                        </span>
                    <?php } else { ?>
                        <span class="itemImage">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri()?>/images/thumbnail-default.jpg">
                            </a>
                        </span>
                    <?php }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="itemHeader">
                    <div class="blogDate pull-left">
                        <?php echo apply_atomic_shortcode('byline', '[entry-published format="d" class="sp_date_day"]'); ?>
                        <?php echo apply_atomic_shortcode('byline', '[entry-published format="M" class="sp_month"]'); ?>
                    </div>
                    <div class="BlogHeaderInfo">
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
        </div>
    </article>
</div>