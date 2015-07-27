<?php
/**
 * Functions
 *
 * @package L.THEME
 * @subpackage Functions
 * @version 1.0
 *
 */

/* Load Hybrid Core theme framework. */
require_once( trailingslashit(TEMPLATEPATH) . 'library/hybrid.php' );
new Hybrid();

/* Theme setup function using 'after_setup_theme' hook. */
add_action('after_setup_theme', 'ltheme_theme_setup');

/**
 * set up
 * @since 1.0
 */
function ltheme_theme_setup() {

    /* Get action/filter hook prefix. */
    //$prefix = hybrid_get_prefix();

    /* Add theme support for core framework features. */
    add_theme_support('hybrid-core-menus', array('primary'));
    add_theme_support('hybrid-core-sidebars', array('logo', 'portfolio', 'portfolio-full', 'blog', 'clients', 'primary', 'left-sidebar', 'right-sidebar', 'subsidiary', 'after-singular'));
    add_theme_support('hybrid-core-widgets');
    add_theme_support('hybrid-core-shortcodes');
    add_theme_support('hybrid-core-theme-settings', array('about', 'footer'));
    //add_theme_support('hybrid-core-styles', array('style'));
    add_theme_support('hybrid-core-scripts', array('drop-downs'));
    add_theme_support('hybrid-core-template-hierarchy');

    /* Add theme support for framework extensions. */
    add_theme_support('post-stylesheets');
    add_theme_support('dev-stylesheet');
    add_theme_support('loop-pagination');
    add_theme_support('get-the-image');
    add_theme_support('breadcrumb-trail');
    add_theme_support('entry-views');
    add_theme_support('cleaner-gallery');
    add_theme_support('cleaner-caption');

    /* Add theme support for WordPress features. */

    /* Add content editor styles. */
    add_editor_style('css/editor-style.css');

    /* Add support for auto-feed links. */
    add_theme_support('automatic-feed-links');

    /* Add support for post formats. */
    add_theme_support('post-formats', array('aside', 'audio', 'image', 'gallery', 'link', 'quote', 'status', 'video'));

    /* Add custom background feature. */
    add_theme_support('custom-background');
    //add_custom_background( 'ltheme_custom_background_callback' );

    /* Set content width. */
    hybrid_set_content_width(600);

    /* Add respond.js for unsupported browsers. */
    add_action('wp_head', 'ltheme_respond_mediaqueries');

    /* Disable primary sidebar widgets when layout is one column. */
    add_filter('sidebars_widgets', 'ltheme_disable_sidebars');
    add_action('template_redirect', 'ltheme_one_column');

    /* Add custom image sizes. */
    add_action('init', 'ltheme_add_image_sizes');

    /* Add <blockquote> around quote posts if user have forgotten about it. */
    add_filter('the_content', 'ltheme_quote_content');

    /* Enqueue script. */
    add_action('wp_enqueue_scripts', 'ltheme_scripts');
}

/**
 * Function for help to unsupported browsers understand mediaqueries.
 * @since 1.0
 */
function ltheme_respond_mediaqueries() {
    ?>

    <!-- Enables media queries in some unsupported browsers. -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->

    <?php
}

/**
 * One-column layout.
 */
function ltheme_one_column() {

    if (!is_active_sidebar('primary') || ( is_attachment() && 'layout-default' == theme_layouts_get_layout() ))
        add_filter('get_theme_layout', 'ltheme_theme_layout_one_column');
}

/**
 * Filters 'get_theme_layout' by returning 'layout-1c'.
 *
 * @since 1.0
 * @param string $layout The layout of the current page.
 * @return string
 */
function ltheme_theme_layout_one_column($layout) {
    return 'layout-1c';
}

/**
 * Disables sidebars if viewing a one-column page.
 *
 * @since 1.0
 * @param array $sidebars_widgets A multidimensional array of sidebars and widgets.
 * @return array $sidebars_widgets
 */
function ltheme_disable_sidebars($sidebars_widgets) {
    global $wp_query;

    if (current_theme_supports('theme-layouts') && !is_admin()) {

        if ('layout-1c' == theme_layouts_get_layout()) {
            $sidebars_widgets['primary'] = false;
        }
    }

    return $sidebars_widgets;
}

/**
 * Adds custom image sizes for thumbnail images. 
 *
 * @since 1.0
 */
function ltheme_add_image_sizes() {

    add_image_size('ltheme-thumbnail', 300, 220, true);
}

/**
 * Wraps the output of the quote post format content in a <blockquote> element if the user hasn't added a 
 * <blockquote> in the post editor.
 *
 * @since 1.0
 * @param string $content The post content.
 * @return string $content
 */
function ltheme_quote_content($content) {

    if (has_post_format('quote')) {
        preg_match('/<blockquote.*?>/', $content, $matches);

        if (empty($matches))
            $content = "<blockquote>{$content}</blockquote>";
    }

    return $content;
}

/**
 * Using FitVids for responsive videos and TinyNav for dropdown navigation menu.
 *
 * @since 1.0
 * @note These are taken from fitvidsjs.com and tinynav.viljamis.com.
 * @link http://fitvidsjs.com/
 * @link http://tinynav.viljamis.com/
 */
function ltheme_scripts() {

    /* Bootstrap script */
    wp_register_script('bootstrap-min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '1.0', true);
    wp_enqueue_script('bootstrap-min');

    wp_register_style('font-awesome-style', get_template_directory_uri() . '/inc/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome-style');

    wp_enqueue_style('bootstrap-min-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '2014-10-10');

    wp_enqueue_style('ltheme-style', get_stylesheet_directory_uri() . '/style.css', array(), '2014-10-10');

    if (!is_admin()) {

        /* Enqueue FitVids */
        wp_enqueue_script('ltheme-fitvids', trailingslashit(THEME_URI) . 'js/jquery.fitvids.js', array('jquery'), '20141124', true);
        wp_enqueue_script('ltheme-fitvids-settings', trailingslashit(THEME_URI) . 'js/fitvids.js', '', '20141124', true);

        /* Enqueue TinyNav */
        wp_enqueue_script('ltheme-fixerheader', trailingslashit(THEME_URI) . 'js/fixerheader.js', array('jquery'), '20141201', true);
        wp_enqueue_script('ltheme-fixerheader-settings', trailingslashit(THEME_URI) . 'js/fixerheader.js', '', '20141201', true);

    }
}

/**
 * Grabs the first URL from the post content of the current post.
 *
 * @since 1.0
 * @return string The link if found.  Otherwise, the permalink to the post.
 *
 */
function ltheme_url_grabber() {
    if (!preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches))
        return get_permalink(get_the_ID());

    return esc_url_raw($matches[1]);
}

/**
 * Custom background
 * @since 1.0
 */
function ltheme_custom_background_callback() {

    /* Get the background image. */
    $image = get_background_image();

    /* If there's an image, just call the normal WordPress callback. We won't do anything here. */
    if (!empty($image)) {
        _custom_background_cb();
        return;
    }

    /* Get the background color. */
    $color = get_background_color();

    /* If no background color, return. */
    if (empty($color))
        return;

    /* Use 'background' instead of 'background-color'. */
    $style = "background: #{$color};";
    ?>
    <style type="text/css">body.custom-background { <?php echo trim($style); ?> }</style>
    <?php
}

/* No comment box for page */
add_filter( 'comments_template', 'remove_comments_template_on_pages', 11 );

function remove_comments_template_on_pages( $file ) {
if ( is_page() )
$file = STYLESHEETPATH . '/no-comments-please.php';
return $file;
}

/* Load shortcode. */
require_once( trailingslashit(TEMPLATEPATH) . 'inc/shortcode-generator.php' );
?>