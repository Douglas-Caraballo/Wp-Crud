<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
/**
 * Elimina las tablas creadas por el plugin
 */
global $wpdb;
$nombreTabla = $wpdb->prefix."registers";
$nombreTablaSecond= $wpdb->prefix."categories_registers";

$sqlRegister="DROP TABLE IF EXISTS $nombreTabla";
$wpdb -> query($sqlRegister);

$sqlCategoriesRegister = "DROP TABLE IF EXISTS $nombreTablaSecond";
$wpdb -> query($sqlCategoriesRegister);

/**
 * Elimina las paginas creadas por el plugin
 */

wp_trash_post( get_option('registrar'));
wp_trash_post( get_option('todos-los-registros'));

wp_cache_flush();