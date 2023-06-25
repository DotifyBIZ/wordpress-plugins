<?php
/*
Plugin Name: Enable Menu Order for Posts
Plugin URI: https://github.com/DotifyBIZ/wordpress-plugins/tree/main/menu-order
Description: Adds menu order and template to post types.
Version: 1.0
Author: Dotify
Author URI: https://dotify.biz
*/

add_action( 'init', 'wpse31629_init' );
function wpse31629_init()
{
	add_post_type_support( 'post', 'page-attributes' );
}
?>