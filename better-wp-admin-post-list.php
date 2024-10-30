<?php
/**
 * @package Better_WP_Admin_Post_List
 * @version 0.1
 */
/*
Plugin Name: Better WP Admin Post List
Plugin URI: https://bakemywp.com
Description: Adding color in WordPress Dashboard Posts & Pages based on their current status, so you can easy recognize published posts from drafts and others.
Version: 0.1
Author: BakemyWP
Author URI: https://bakemywp.com
Text Domain: bwpadpl
*/


function better_wp_admin_post_list() {

  wp_enqueue_style('admin-styles', plugin_dir_url( __FILE__ ) . 'better-wp-admin-post-list.css');

}

add_action('admin_enqueue_scripts', 'better_wp_admin_post_list');