<?php

/* 
Plugin Name:  Recipe
Description: A Simple WordPress plugin that allows user to create recipes ans rate those recipes
Version: 1.0
Author: Udemy
Author URI: https://udemy.com
Text Domain: recipe
*/

if( !function_exists('add_action')){
  echo "Hi there! i'm just a plugin, not much i can";
  exit;
}

// Setup


// Includes
include('includes/activate.php');
include('includes/init.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');
add_action('init', 'recipe_init');

// Shortcodes