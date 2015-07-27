<?php

// shortcode for column
add_shortcode('column', 'ltheme_column_shortcode');

function ltheme_column_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("col" => '1/1', 'class' => '', 'last' => false), $atts));
    if ($last && $last != 'false') {
        $last = 'last';
        $clear = '<div class="clear"></div>';
    } else {
        $last = '';
        $clear = '';
    }

    //return '<div class="shortcode' . str_replace('/', '-', $col) . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
    switch ($col) {
        case '1/4': return '<div class="col-sm-3 ' . $class . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
        case '1/3': return '<div class="col-sm-4 ' . $class . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
        case '1/2': return '<div class="col-sm-6 ' . $class . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
        case '2/3': return '<div class="col-sm-8 ' . $class . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
        case '3/4': return '<div class="col-sm-9 ' . $class . ' ' . $last . '">' . do_shortcode($content) . '</div>' . $clear;
        case '1/1': return '<div class="col-sm-12">' . do_shortcode($content) . '</div>';
        default : return;
    }
}

// social shortcode
add_shortcode('social', 'ltheme_social_shortcode');

function ltheme_social_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("type" => 'facebook'), $atts));

    $social = '<div class="shortcode-social-icon"><a href="' . $content . '">';
    $social = $social . '<img class="no-preload" src="' . trailingslashit(TEMPLATEPATH) . 'images/social-icon/' . $type . '.png' . '" width="32" height="32" alt="' . $type . '"></a></div>';
    return $social;
}

// shortcode for icon
add_shortcode('icon', 'ltheme_icon_shortcode');

function ltheme_icon_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("name" => 'cog', "class" => ''), $atts));

    return '<i class="fa fa-' . $name . ' ' . $class . '" >' . do_shortcode($content) . '</i>';
}

// shortcode for space
add_shortcode('space', 'ltheme_space_shortcode');

function ltheme_space_shortcode($atts) {
    extract(shortcode_atts(array("height" => '20'), $atts));

    return '<div class="clear" style=" height:' . $height . 'px;" ></div>';
}

// shortcode for tab
$ltheme_tab_array = array();
add_shortcode('tab', 'ltheme_tab_shortcode');

function ltheme_tab_shortcode($atts, $content = null) {
    global $ltheme_tab_array;
    $ltheme_tab_array = array();

    do_shortcode($content);

    $num = sizeOf($ltheme_tab_array);
    $tab = '<div class="ltheme-tab">';

    // tab title
    $tab = $tab . '<ul class="ltheme-tab-title">';
    for ($i = 0; $i < $num; $i++) {
        $active = ( $i == 0 ) ? 'class="active" ' : '';

        $tab = $tab . '<li><a data-tab="tab-' . $i . '" ' . $active;
        $tab = $tab . '>' . $ltheme_tab_array[$i]["title"] . '</a></li>';
    }
    $tab = $tab . '</ul>';

    // tab content
    $tab = $tab . '<div class="clear"></div>';
    $tab = $tab . '<ul class="ltheme-tab-content">';
    for ($i = 0; $i < $num; $i++) {
        $active = ( $i == 0 ) ? 'class="active" ' : '';

        $tab = $tab . '<li data-tab="tab-' . $i . '" ' . $active;
        $tab = $tab . '>' . $ltheme_tab_array[$i]["content"] . '</li>';
    }
    $tab = $tab . "</ul>"; // ltheme-tab-content

    $tab = $tab . "</div>"; // ltheme-tab

    return $tab;
}

add_shortcode('tab_item', 'ltheme_tab_item_shortcode');

function ltheme_tab_item_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("title" => ''), $atts));

    global $ltheme_tab_array;

    $ltheme_tab_array[] = array("title" => $title, "content" => do_shortcode($content));
}

// shortcode for vimeo
add_shortcode('vimeo', 'ltheme_vimeo_shortcode');

function ltheme_vimeo_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("height" => '', "width" => ''), $atts));

    $vimeo = '<div style="max-width:' . $width . 'px;" >';
    $vimeo = $vimeo . get_vimeo($content, $width, $height, true);
    $vimeo = $vimeo . '</div>';

    return $vimeo;
}

// shortcode for youtube
add_shortcode('youtube', 'ltheme_youtube_shortcode');

function ltheme_youtube_shortcode($atts, $content = null) {
    extract(shortcode_atts(array("height" => '', "width" => ''), $atts));

    $youtube = '<div style="max-width:' . $width . 'px;" >';
    $youtube = $youtube . get_youtube($content, $width, $height, 'youtube', true);
    $youtube = $youtube . '</div>';

    return $youtube;
}

?>