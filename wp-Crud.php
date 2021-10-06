<?php
/*
Plugin Name: wp-Crud
Plugin URI:
Description: Plugin para crear un crud en wordpress y generar pdf
Version: 1.0
Author: Douglas Caraballo
Author URI:
License:
*/

defined('ABSPATH') or die("Bye bye");

define('WPC_RUTA',plugin_dir_path(__FILE__));

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
function db_WpCrud(){
    global $wpdb;
    $nombreTabla = $wpdb->prefix."registers";
    $charset_collate = $wpdb->get_charset_collate();
    $created="CREATE TABLE $nombreTabla(
            ID BIGINT(20) unsigned NOT NULL AUTO_INCREMENT,
            nombre TEXT NOT NULL,
            fecha TEXT NOT NULL,
            id_user BIGINT(20) unsigned NOT NULL,
            PRIMARY KEY (ID)
            FOREIGN KEY (id_user) REFERENCES wptc_users(ID)
            ON UPDATE CASCADE ON DELETE CASCADE)$charset_collate;";
    dbDelta($created);
}

register_activation_hook( __FILE__, 'db_WpCrud' );

include(WPC_RUTA.'include/menu_option.php');