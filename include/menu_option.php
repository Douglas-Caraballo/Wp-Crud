<?php
define('WPC_RUTA',plugin_dir_path(__FILE__));

include(WPC_RUTA.'admin/configuracion.php');

function MenuWpCrud(){
    add_menu_page(__('Registros'),  __('Registros'), 'manage_options', 'registros_prueba', 'MenuRegiter');
}

add_action('admin_menu', 'MenuWpCrud');