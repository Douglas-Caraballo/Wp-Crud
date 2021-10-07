<?php
define('WPC_RUTA',plugin_dir_path(__FILE__));

include(WPC_RUTA.'admin/inicio.php');

function MenuWpCrud(){
    add_menu_page(__('WP-Crud'),  __('WP-Crud'), 'manage_options', 'wp-crud', 'MenuInicio','dashicons-clipboard',59);
    add_submenu_page('wp-crud', 'Registrar', 'Registrar','manage_options', 'registrar','SubMenuRegistro');
    add_submenu_page('wp-crud', 'Todos los Registros', 'Todos los Registros','manage_options', 'registros','SubMenuTodos');
    add_submenu_page('wp-crud', 'Generar Reporte', 'Generar Reportes','manage_options', 'Reportes','SubmenuReporte');
}

add_action('admin_menu', 'MenuWpCrud');