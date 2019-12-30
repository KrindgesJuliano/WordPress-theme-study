<?php

function r_activate_plugin(){
  if(version_compare(get_bloginfo('version'), '5.0', '<')){
    wp_die(__("You must update WordPress to use this plugin.", 'recipe'));
  }

  global $wpdb;
  $createSQL      = "
  CREATE TABLE `" . $wpdb->prefix ."recipe_ratings` (
    `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `recipe_id` bigint(20) unsigned DEFAULT NULL,
    `rating` float DEFAULT NULL,
    `user_ip` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`ID`)
  ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";


  require( ABSPATH . "/wp-admin/includes/upgrade.php");
  dbDelta($createSQL );
}