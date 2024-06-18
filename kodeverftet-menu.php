<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Kodeverftet Menu
 * Plugin URI:        https://github.com/joakimtveter/kodeverftet-wp-menu
 * Description:       A Custom Post Type plugin to add a restaurant menu.
 * Version:           0.0.1
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Author:            Joakim Tveter
 * Author URI:        https://joakimtveter.no/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kodeverftet-menu
 * Domain Path:       /languages
 */

/**
 * Register custom post type for Kodeverftet Menu.
 *
 * See https://developer.wordpress.org/reference/functions/register_post_type/ for more information.
 *
 * @since 0.0.1
 * @return void
 */

function kodeverftet_menu_custom_post_type() {
    $labels = [
        "name"                     => esc_html__( "Menu", "kodeverftet-menu" ),
        "singular_name"            => esc_html__( "Dish", "kodeverftet-menu" ),
        "add_new"                  => esc_html__( "Add new", "kodeverftet-menu" ),
        "add_new_item"             => esc_html__( "Add new Dish", "kodeverftet-menu" ),
        "edit_item"                => esc_html__( "Edit Dish", "kodeverftet-menu" ),
        "new_item"                 => esc_html__( "New Dish", "kodeverftet-menu" ),
        "view_items"               => esc_html__( "View Dish", "kodeverftet-menu" ),
        "search_items"             => esc_html__( "Search Dishes", "kodeverftet-menu" ),
        "not_found"                => esc_html__( "No dishes found", "kodeverftet-menu" ),
        "not_found_in_trash"       => esc_html__( "No dishes found in trash", "kodeverftet-menu" ),
        "archives"                 => esc_html__( "Menu", "kodeverftet-menu" ),
        "attributes"               => esc_html__( "Dish Attributes", "kodeverftet-menu" ),
        "uploaded_to_this_item"    => esc_html__( "Uploaded to this dish", "kodeverftet-menu" ),
        "featured_image"           => esc_html__( "Featured image", "kodeverftet-menu" ),
        "set_featured_image"       => esc_html__( "Set featured image", "kodeverftet-menu" ),
        "remove_featured_image"    => esc_html__( "Remove featured image", "kodeverftet-menu" ),
        "use_featured_image"       => esc_html__( "Use as featured image", "kodeverftet-menu" ),
        "menu_name"                => esc_html__( "Menu", "kodeverftet-menu" ),
        "filter_items_list"        => esc_html__( "Filter dishes list", "kodeverftet-menu" ),
        "items_list_navigation"    => esc_html__( "Dishes list navigation", "kodeverftet-menu" ),
        "items_list"               => esc_html__( "Dishes list", "kodeverftet-menu" ),
        "item_published"           => esc_html__( "Dish published", "kodeverftet-menu" ),
        "item_published_privately" => esc_html__( "Dish published privately", "kodeverftet-menu" ),
        "item_reverted_to_draft"   => esc_html__( "Dish reverted to draft", "kodeverftet-menu" ),
        "item_trashed"             => esc_html__( "Dish trashed", "kodeverftet-menu" ),
        "item_scheduled"           => esc_html__( "Dish scheduled", "kodeverftet-menu" ),
    ];

    $args = [
        'label'               => esc_html__( 'Menu', 'kodeverftet-menu' ),
        'labels'              => $labels,
        'description'         => 'Post type description',
        'public'              => true,
        "publicly_queryable"  => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-food',
        'supports'            => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'excerpt' ),
        'rewrite'             => array( 'slug' => 'menu' ),
        'delete_with_user'    => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "test",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "can_export" => true,
        "rewrite" => [ "slug" => "tester", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];
    register_post_type("kodeverftet-menu-dish", $args );
}
add_action('init', 'kodeverftet_menu_custom_post_type', 0);

function cptui_register_my_cpts_joakim_test() {

    /**
     * Post Type: Test.
     */

    $labels = [
        "name" => esc_html__( "Test", "twentytwentyfour" ),
        "singular_name" => esc_html__( "Test", "twentytwentyfour" ),
        "menu_name" => esc_html__( "My Test", "twentytwentyfour" ),
        "all_items" => esc_html__( "All Test", "twentytwentyfour" ),
        "add_new" => esc_html__( "Add new", "twentytwentyfour" ),
        "add_new_item" => esc_html__( "Add new Test", "twentytwentyfour" ),
        "edit_item" => esc_html__( "Edit Test", "twentytwentyfour" ),
        "new_item" => esc_html__( "New Test", "twentytwentyfour" ),
        "view_item" => esc_html__( "View Test", "twentytwentyfour" ),
        "view_items" => esc_html__( "View Test", "twentytwentyfour" ),
        "search_items" => esc_html__( "Search Test", "twentytwentyfour" ),
        "not_found" => esc_html__( "No Test found", "twentytwentyfour" ),
        "not_found_in_trash" => esc_html__( "No Test found in trash", "twentytwentyfour" ),
        "parent" => esc_html__( "Parent Test:", "twentytwentyfour" ),
        "featured_image" => esc_html__( "Featured image for this Test", "twentytwentyfour" ),
        "set_featured_image" => esc_html__( "Set featured image for this Test", "twentytwentyfour" ),
        "remove_featured_image" => esc_html__( "Remove featured image for this Test", "twentytwentyfour" ),
        "use_featured_image" => esc_html__( "Use as featured image for this Test", "twentytwentyfour" ),
        "archives" => esc_html__( "Test archives", "twentytwentyfour" ),
        "insert_into_item" => esc_html__( "Insert into Test", "twentytwentyfour" ),
        "uploaded_to_this_item" => esc_html__( "Upload to this Test", "twentytwentyfour" ),
        "filter_items_list" => esc_html__( "Filter Test list", "twentytwentyfour" ),
        "items_list_navigation" => esc_html__( "Test list navigation", "twentytwentyfour" ),
        "items_list" => esc_html__( "Test list", "twentytwentyfour" ),
        "attributes" => esc_html__( "Test attributes", "twentytwentyfour" ),
        "name_admin_bar" => esc_html__( "Test", "twentytwentyfour" ),
        "item_published" => esc_html__( "Test published", "twentytwentyfour" ),
        "item_published_privately" => esc_html__( "Test published privately.", "twentytwentyfour" ),
        "item_reverted_to_draft" => esc_html__( "Test reverted to draft.", "twentytwentyfour" ),
        "item_trashed" => esc_html__( "Test trashed.", "twentytwentyfour" ),
        "item_scheduled" => esc_html__( "Test scheduled", "twentytwentyfour" ),
        "item_updated" => esc_html__( "Test updated.", "twentytwentyfour" ),
        "parent_item_colon" => esc_html__( "Parent Test:", "twentytwentyfour" ),
    ];

    $args = [
        "label" => esc_html__( "Test", "twentytwentyfour" ),
        "labels" => $labels,
        "description" => "Temdfkasd alsifdn sajdnd nfsda,fnsd fs",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "test",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => true,
        "rewrite" => [ "slug" => "tester", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "joakim-test", $args );
}

add_action( 'init', 'cptui_register_my_cpts_joakim_test' );