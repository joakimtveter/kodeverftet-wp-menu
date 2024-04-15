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

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Register custom post type for Kodeverftet Menu.
 *
 * See https://developer.wordpress.org/reference/functions/register_post_type/ for more information.
 *
 * @since 0.0.1
 * @return void
 */
function kodeverftet_menu_custom_post_type() {
    $labels = array(
        'name'                     => __( 'Menu', 'kodeverftet-menu' ),
        'singular_name'            => __( 'Dish', 'kodeverftet-menu' ),
        'add_new'                  => __( 'Add new', 'kodeverftet-menu' ),
        'add_new_item'             => __( 'Add new Dish', 'kodeverftet-menu' ),
        'edit_item'                => __( 'Edit Dish', 'kodeverftet-menu' ),
        'new_item'                 => __( 'New Dish', 'kodeverftet-menu' ),
        'view_items'               => __( 'View Dish', 'kodeverftet-menu' ),
        'search_items'             => __( 'Search Dishes', 'kodeverftet-menu' ),
        'not_found'                => __( 'No dishes found', 'kodeverftet-menu' ),
        'not_found_in_trash'       => __( 'No dishes found in trash', 'kodeverftet-menu' ),
        'archives'                 => __( 'Menu', 'kodeverftet-menu' ),
        'attributes'               => __( 'Dish Attributes', 'kodeverftet-menu' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this dish', 'kodeverftet-menu' ),
        'featured_image'           => __( 'Featured image’', 'kodeverftet-menu' ),
        'set_featured_image'       => __( 'Set featured image’', 'kodeverftet-menu' ),
        'remove_featured_image'    => __( 'Remove featured image', 'kodeverftet-menu' ),
        'use_featured_image'       => __( 'Use as featured image', 'kodeverftet-menu' ),
        'menu_name'                => __( 'Menu', 'kodeverftet-menu' ),
        'filter_items_list'        => __( 'Filter dishes list', 'kodeverftet-menu' ),
        'items_list_navigation'    => __( 'Dishes list navigation', 'kodeverftet-menu' ),
        'items_list'               => __( 'Dishes list', 'kodeverftet-menu' ),
        'item_published'           => __( 'Dish published', 'kodeverftet-menu' ),
        'item_published_privately' => __( 'Dish published privately', 'kodeverftet-menu' ),
        'item_reverted_to_draft'   => __( 'Dish reverted to draft', 'kodeverftet-menu' ),
        'item_trashed'             => __( 'Dish trashed', 'kodeverftet-menu' ),
        'item_scheduled'           => __( 'Dish scheduled', 'kodeverftet-menu' ),
    );

    register_post_type('kodeverftet-menu-dish',
        array(
            'labels'           => $labels,
            'description'      => __('Post type description', 'kodeverftet-menu'),
            'public'           => true,
            'hierarchical'     => false,
            'show_ui'          => true,
            'has_archive'      => true,
            'menu_icon'        => 'dashicons-admin-links',
            'supports'         => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'excerpt' ),
            'rewrite'          => array( 'slug' => 'menu' ),
            'delete_with_user' => false,

        )
    );
}
add_action('init', 'kodeverftet_menu_custom_post_type');