<?php
function create_lead_post_type() {
    $labels = array(
        'name'               => 'Лиды',
        'singular_name'      => 'Лид',
        'add_new'            => 'Добавить новый лид',
        'add_new_item'       => 'Добавить новый лид',
        'edit_item'          => 'Редактировать лид',
        'new_item'           => 'Новый лид',
        'all_items'          => 'Все лиды',
        'view_item'          => 'Просмотр лидов',
        'search_items'       => 'Поиск лидов',
        'not_found'          => 'Лиды не найдены',
        'not_found_in_trash' => 'Лиды не найдены в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Лиды'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'leads' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'lead', $args );
}

add_action( 'init', 'create_lead_post_type' );

