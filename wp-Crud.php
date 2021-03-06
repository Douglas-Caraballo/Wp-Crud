<?php
/*
Plugin Name: wp-Crud
Plugin URI:
Description: Plugin para crear un crud en wordpress y generar pdf
Version: 1.5
Author: Douglas Caraballo
Author URI: https://github.com/Douglas-Caraballo
License:
*/

defined('ABSPATH') or die("Bye bye");

define('WPC_RUTA',plugin_dir_path(__FILE__));
define('WPC_RUTA_PUBLIC',plugin_dir_url(__FILE__));

//Activación del plugin
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
register_activation_hook( __FILE__, 'db_WpCrud' );
register_activation_hook( __FILE__, 'PaginasCrud' );

//Funciones del plugin
require(WPC_RUTA.'include/bd_wp-crud.php');
require(WPC_RUTA.'include/news_pages.php');
require(WPC_RUTA.'include/menu_option.php');
require('functions.php');
require(WPC_RUTA. 'include/shortcodes.php');


//Desactivación del plugin