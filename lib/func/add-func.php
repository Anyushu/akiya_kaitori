<?php

// 記事一覧アイキャッチ表示
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');
function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'thumbnail', [
            'style'=>'width:100px;height:auto'
        ]);
    }
    if (isset($thum) && $thum) {
        echo $thum;
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

// home_url
function e_home_url() {
    echo esc_url(home_url());
}

// wp_url
function e_wp_url() {
    echo get_template_directory_uri();
}

// wp_imgs_url
function e_img_url() {
    echo get_template_directory_uri().'/lib/images';
}