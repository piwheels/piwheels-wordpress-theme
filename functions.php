<?php

// Custom functions

function pw_title() {
    bloginfo('title');
    echo " - ";
    if (is_home()) {
        bloginfo('description');
    }
    elseif (is_single()) {
        the_title();
    }
    elseif (is_tag()) {
        single_tag_title();
        echo " posts";
    }
}

function timestamped_stylesheet($stylesheet='style.css') {
    $stylesheet_url = get_bloginfo('template_url') . '/' . $stylesheet;
    $stylesheet_path = get_stylesheet_directory() . '/' . $stylesheet;
    echo $stylesheet_url . "?" . filemtime($stylesheet_path);
}

function show_tag_list ($id, $separator, $before) {
    $tags = wp_get_post_tags($id);

    if (!empty($tags)) {

        $tags_html = array();
        foreach ($tags as $tag) {
            $tags_html[] = "<a href='/tag/{$tag->slug}/'>{$tag->name}</a>";
        }

        echo $before . join($separator, $tags_html);
    }
}
